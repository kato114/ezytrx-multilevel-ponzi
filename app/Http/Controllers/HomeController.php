<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

use IEXBase\TronAPI\Exception\TronException;
use IEXBase\TronAPI\Provider\HttpProvider;
use IEXBase\TronAPI\Tron;

use App\Models\User;
use App\Models\Transaction;

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $provider_url = 'https://api.shasta.trongrid.io';//https://api.trongrid.io;

        $fullNode = new HttpProvider($provider_url);
        $solidityNode = new HttpProvider($provider_url);
        $eventServer = new HttpProvider($provider_url);

        try {
            $this->tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
        } catch (\IEXBase\TronAPI\Exception\TronException $e) {
            exit($e->getMessage());
        }

        $result = $this->call_api('https://api.coingecko.com/api/v3/coins/tron?localization=false&tickers=false&market_data=true&community_data=false&developer_data=false&sparkline=false');
        $tron_price = isset($result["market_data"]["current_price"]["usd"]) ? $result["market_data"]["current_price"]["usd"] : 0.03;
        View::share('tron_price', $tron_price);
    }
    
    public function index()
    {
        $data["all_participant_count"] = User::count();
        $data["recent_participant_count"] = User::where('created_at', '>=', date("Y-m-d H:i:s", strtotime("now") - 3600 * 24))->count();
        $data["total_earned_trx"] = User::select(DB::raw("SUM(gain_amount_one + gain_amount_ten) / 1000000 as trx"))->first()->trx;

        return view('home.index', $data);
    }

    public function login()
    {
        return view('home.login');   
    }

    public function check_login()
    {
        $user = User::where('address_name', '!=', '-1')->find(request('id'));

        if ($user != NULL) {
            if(request('mode') == "login" && $user->levelup_at == NULL) {
                $user->address = request('address');
                $user->levelup_at = date("Y-m-d H:i:s");
                $user->save();
            }

            session(['user' => $user]);
            session(['mode' => request('mode')]);
            return response()->json(array('status' => 'success'));
        } else {
            return response()->json(array('status' => 'failed'));
        }
    }

    public function register()
    {
        $sid = request('sid');
        if($sid == NULL)
            $sid = rand() % User::count() + 1;

        return view('home.register', compact('sid'));   
    }

    public function check_register()
    {
        if(User::where('id', '=', request('account_id'))->first() == NULL) {
            $user = new User();
            $user->id = request('account_id');
            $user->address = request('address');
            $user->address_name = -1;
            $user->ref_address_name = -1;
            $user->referral_id = -1;
            $user->org_referral_id = -1;
            $user->created_at = User::max('created_at');
            $user->save();

            echo json_encode(array('status' => 'success'));            
        } else {
            echo json_encode(array('status' => 'failed'));                        
        }
    }

    private function call_api($request)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-type: application/json"
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        
        $response = curl_exec($ch);
        curl_close($ch);

        $info = json_decode($response, TRUE);

        if ($info == NULL)
            return NULL;
        return $info;
    }
}
