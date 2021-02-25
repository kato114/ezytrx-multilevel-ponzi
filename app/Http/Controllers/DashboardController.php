<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

use IEXBase\TronAPI\Exception\TronException;
use IEXBase\TronAPI\Provider\HttpProvider;
use IEXBase\TronAPI\Tron;

use App\Models\User;
use App\Models\Transaction;
use App\Models\Level;
use App\Models\Lost;

class DashboardController extends Controller
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
        $user = session('user');
        $data["mode"] = session('mode');
        if($user == NULL)
            return redirect()->route('home');

        $data["user"] = $user;
        $data["levels"] = array(1000, 2000, 4000, 8000, 16000, 32000, 64000, 128000, 256000, 512000, 1024000, 2048000);
        $data["ezy1_members"] = User::where('org_referral_id', '=', $user->id)->get()->toArray();
        $ezy10_one_members = User::where('referral_id', '=', $user->id)->get()->toArray();
        foreach ($ezy10_one_members as $key => $member) {
            $ezy10_one_members[$key]["members"] = User::where('referral_id', '=', $member["id"])->get()->toArray();
        }
        $data["ezy10_one_members"] = $ezy10_one_members;

        return view('dashboard.index', $data);
    }

    public function ez1_detail()
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $user_id = request('user_id');
        $data["levels"] = array(1000, 2000, 4000, 8000, 16000, 32000, 64000, 128000, 256000, 512000, 1024000, 2048000);
        $data["user"] = User::where('id', '=', $user_id)->first();
        $data["ezy1_members"] = User::where('org_referral_id', '=', $user_id)->get()->toArray();
        return view('dashboard.ez1_detail', $data);
    }

    public function ez10_detail()
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $user_id = request('user_id');
        $data["top_id"] = request('top_id');
        $data["user"] = User::where('id', '=', $user_id)->first();
        $ezy10_one_members = User::where('referral_id', '=', $user_id)->get()->toArray();
        foreach ($ezy10_one_members as $key => $member) {
            $ezy10_one_members[$key]["members"] = User::where('referral_id', '=', $member["id"])->get()->toArray();
        }
        $data["ezy10_one_members"] = $ezy10_one_members;
        return view('dashboard.ez10_detail', $data);
    }

    public function teamStats()
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $data["user"] = $user;
        $data["teamlist"] = $this->getChild($data["user"]->id, 20);
        $data["day_count"] = User::whereIn('id', array_column($data["teamlist"], 'id'))->where('created_at', '>=', date("Y-m-d H:i:s", strtotime('now') - 24 * 3600))->count();
        $data["week_count"] = User::whereIn('id', array_column($data["teamlist"], 'id'))->where('created_at', '>=', date("Y-m-d H:i:s", strtotime('now') - 7 * 24 * 3600))->count();
        return view('dashboard.teamStats', $data);
    }

    public function getChild($id, $level)
    {        
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $teamlist = User::where('referral_id', '=', $id)->get()->toArray();
        if($level > 0) {
            foreach ($teamlist as $key => $member) {
                $team = $this->getChild($member["id"], $level - 1);
                array_merge($teamlist, $team);
            }
        }
        return $teamlist;
    }

    public function personalStats()
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $tnxs = Transaction::where('to_user_id', '=', $user->id);
        if(request('type') == "filter")
        {
            if(request('program') != '') {
                $tnxs = $tnxs->where('type', '=', request('program'));
                $data['program'] = request('program');
            }

            if(request('from_date') != '') {
                $tnxs = $tnxs->where('created_at', '>=', request('from_date') . ' 00:00:00');
                $data['from_date'] = request('from_date');
            }
            if(request('to_date') != '') {
                $tnxs = $tnxs->where('created_at', '<=', request('to_date') . ' 23:59:59');
                $data['to_date'] = request('to_date');
            }
        }

        $data["finlist"] = $tnxs->get();
        $data["user"] = $user;

        return view('dashboard.personalStats', $data);
    }

    public function leaderBoard()
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $data["leaderlist"] = User::select('id', 'address', DB::raw('IFNULL(gain_amount_one + gain_amount_ten, 0) as gain_amount '))
                ->where('id', '!=', 1)
                ->orderby('gain_amount', 'desc')
                ->limit(20)
                ->get();

        return view('dashboard.leaderBoard', $data);
    }

    public function matrix()
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $matrix = array();
        for($i = 0; $i < 20; $i++) {
            $matrix[$i] = User::where('ref_address_name', '=', $user->address_name)
                ->where('user_level', '=', $i + 1)
                ->count();
        }

        return view('dashboard.matrix', array('matrix' => $matrix));
    }

    public function lostEarning()
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');
        
        $data["lost_list"] = DB::select( DB::raw("SELECT losts.txn_id, losts.level, transactions.type, SUM(transactions.amount) as amount, transactions.created_at FROM losts 
            LEFT JOIN transactions ON transactions.txn_id = losts.txn_id
            LEFT JOIN users ON users.address_name = losts.user
            WHERE users.id = transactions.to_user_id AND users.id=:user_id
            GROUP BY losts.txn_id, losts.level, transactions.type, transactions.created_at "), array(
           'user_id' => $user->id,
         ));

        return view('dashboard.lostEarning', $data);
    }

    public function check_upgrade()
    {
        // $this->tron->setAddress(env('Wallet_ADDRESS'));
        // $this->tron->setPrivateKey(env('Wallet_PrvKey'));
        //var_dump($this->tron->generateAddress());

        var_dump($this->tron->getAccount('TGCGgunYNvxCGwJtMuMLcV8L3KauWHiCaz'));
        var_dump($this->tron->getBalance('TGCGgunYNvxCGwJtMuMLcV8L3KauWHiCaz', true));
//TGCGgunYNvxCGwJtMuMLcV8L3KauWHiCaz
        exit;


        try {
            $contractAddress = env('CONTRACT_ADDRESS');

            $since = User::count() == 1 ? NULL : User::max("created_at");
            $result = $this->tron->getEventResult($contractAddress, $since == NULL ? 0 : 0, "regLevelEv");

            for($i = 0; $i < count($result); $i++)
            {
                $user_data = $result[$i];

                $user_id = $user_data["result"][1];
                $user = User::where("id", "=", $user_id)->first();

                if($user == NULL) {
                    $user = new User();
                    $user->id = $user_id;
                    $user->address = '';
                    $user->address_name = -1;
                    $user->ref_address_name = -1;
                    $user->referral_id = -1;
                    $user->org_referral_id = -1;
                    $user->created_at = User::max('created_at');
                    $user->save();
                }
                if($user->address_name != -1)
                    continue;

                $user->address_name = $user_data["result"][0];
                $user->ref_address_name = $user_data["result"][4];
                $user->referral_id = $user_data["result"][2];
                $user->org_referral_id = $user_data["result"][3];
                $user->created_at = $user_data["result"][5];
                $user->save();

                $trans_list = $this->tron->getEventResult($contractAddress, $user_data["block_timestamp"], "paidForLevelEv");

                foreach ($trans_list as $key => $trans_data) {
                    if($user_data["block_timestamp"] != $trans_data["block_timestamp"])
                        continue;

                    $transaction = new Transaction();
                    $transaction->txn_id = $trans_data["transaction_id"];
                    $transaction->from_user_id = $trans_data["result"]["fromUserId"];
                    $transaction->from_user_address = $trans_data["result"]["fromAddress"];
                    $transaction->to_user_id = $trans_data["result"]["toUserId"];
                    $transaction->to_user_address = $trans_data["result"]["toAddress"];
                    $transaction->type = $trans_data["result"]["Type"];
                    $transaction->level = $trans_data["result"]["level"];
                    $transaction->pack_amount = $trans_data["result"]["packageAmount"];
                    $transaction->amount = $trans_data["result"]["amount"];
                    $transaction->created_at = $trans_data["result"]["time"];
                    $transaction->updated_at = $trans_data["result"]["time"];
                    $transaction->save();

                    $from_user = User::where('id', '=', $transaction->from_user_id)->first();
                    $from_user->invest_amount += $transaction->amount;
                    $from_user->save();

                    $to_user = User::where('id', '=', $transaction->to_user_id)->first();
                    if($transaction->type == 0)
                        $to_user->gain_amount_one += $transaction->amount;
                    else if($transaction->type == 1)
                        $to_user->gain_amount_ten += $transaction->amount;
                    else if($transaction->type == 2)
                        $to_user->temp_amount += $transaction->amount;

                    $to_user->save();
                }
            }

            $since = Level::where("id", "=", (Level::max("id") - 5))->first();
            $since = $since == NULL ? 0 : strtotime($since->created_at) * 1000;

            $result = $this->tron->getEventResult($contractAddress, $since, "LevelByEv");

            for($i = 0; $i < count($result); $i++)
            {
                $levelup_data = $result[$i];
                if(Level::where("txn_id", "=", $levelup_data["transaction_id"])->first() == NULL) {

                    $user = User::where("id", "=", $levelup_data["result"]["userid"])->first();
                    if($user != NULL)
                    {
                        if($user->user_level <= $levelup_data["result"]["level"]) {
                            $user->user_level = $levelup_data["result"]["level"];
                            $user->levelup_at = date("Y-m-d H:i:s", $levelup_data["result"]["time"]);
                            $user->save();
                        }

                        session(['user' => $user]);

                        $level = new Level();
                        $level->txn_id = $levelup_data["transaction_id"];
                        $level->userid = $levelup_data["result"]["userid"];
                        $level->level = $levelup_data["result"]["level"];
                        $level->amount = $levelup_data["result"]["amount"];
                        $level->created_at = $levelup_data["result"]["time"];
                        $level->save();

                        $trans_list = $this->tron->getEventResult($contractAddress, $levelup_data["block_timestamp"], "paidForLevelEv");
                        foreach ($trans_list as $key => $trans_data) {
                            if($levelup_data["block_timestamp"] != $trans_data["block_timestamp"])
                                continue;

                            $transaction = new Transaction();
                            $transaction->txn_id = $trans_data["transaction_id"];
                            $transaction->from_user_id = $trans_data["result"]["fromUserId"];
                            $transaction->from_user_address = $trans_data["result"]["fromAddress"];
                            $transaction->to_user_id = $trans_data["result"]["toUserId"];
                            $transaction->to_user_address = $trans_data["result"]["toAddress"];
                            $transaction->type = $trans_data["result"]["Type"];
                            $transaction->level = $trans_data["result"]["level"];
                            $transaction->pack_amount = $trans_data["result"]["packageAmount"];
                            $transaction->amount = $trans_data["result"]["amount"];
                            $transaction->created_at = $trans_data["result"]["time"];
                            $transaction->save();

                            $from_user = User::where('id', '=', $transaction->from_user_id)->first();
                            $from_user->invest_amount += $transaction->amount;
                            $from_user->save();

                            $to_user = User::where('id', '=', $transaction->to_user_id)->first();
                            if($transaction->type == 0)
                                $to_user->gain_amount_one += $transaction->amount;
                            else if($transaction->type == 1)
                                $to_user->gain_amount_ten += $transaction->amount;
                            else if($transaction->type == 2)
                                $to_user->temp_amount += $transaction->amount;

                            $to_user->save();
                        }


                        $lost_list = $this->tron->getEventResult($contractAddress, $levelup_data["block_timestamp"], "lostForLevelEv");
                        foreach ($lost_list as $key => $lost_data) {
                            $lost = new Lost();
                            $lost->txn_id = $lost_data["transaction_id"];
                            $lost->user = $lost_data["result"]["0"];
                            $lost->referral = $lost_data["result"]["1"];
                            $lost->level = $lost_data["result"]["2"];
                            $lost->created_at = $lost_data["result"]["3"];
                            $lost->save();
                        }
                    }
                }
            }

            echo json_encode(array('status' => 'success'));
        } catch (\IEXBase\TronAPI\Exception\TronException $e) {
            echo json_encode(array('status' => 'failed'));
        }
    }

    public function send_bonus()
    {
        $this->tron->setAddress(env('Wallet_ADDRESS'));
        $this->tron->setPrivateKey(env('Wallet_PrvKey'));

        $owner = User::first();
        $owner_bonus = $owner->temp_amount / 1000000;

        $ref_percents = array(4, 2, 1.1, 0.8, 0.6, 0.5, 0.4, 0.3, 0.2, 0.1);
        $ref_tops = DB::select( DB::raw("SELECT u.id, COUNT(*) as count FROM users u 
            LEFT JOIN (SELECT * FROM users WHERE created_at LIKE '" . date("Y-m-d") . "%') c ON u.id = c.org_referral_id 
            WHERE c.id IS NOT NULL AND u.id != 1 
            GROUP BY u.id 
            ORDER BY count DESC
            LIMIT 10"));

        foreach ($ref_tops as $key => $ref) {
            $bonus = $owner->temp_amount * $ref_percents[$key] / 20000000;

            try {
                $user = User::where('id', '=', $ref->id)->first();
                $result = $this->tron->sendTransaction($user->address, $bonus);

                $user->gain_amount_bonus += $bonus * 1000000;
                $user->save();

                $transaction = new Transaction();
                $transaction->txn_id = $result["txid"];
                $transaction->from_user_id = 1;
                $transaction->from_user_address = $owner->address_name;
                $transaction->to_user_id = $user->id;
                $transaction->to_user_address = $user->address_name;
                $transaction->type = 3;
                $transaction->level = $key;
                $transaction->pack_amount = $owner->temp_amount / 2;
                $transaction->amount = $bonus * 1000000;
                $transaction->created_at = date("Y-m-d H:i:s", $result["raw_data"]["timestamp"] / 1000);
                $transaction->save();

                $owner_bonus -= $bonus;
            } catch (\IEXBase\TronAPI\Exception\TronException $e) {
            }
        }

        $user_count_35 = User::where('user_level', '>=', 3)->where('user_level', '<=', 5)->where('id', '!=', 1)->count();
        $user_count_68 = User::where('user_level', '>=', 6)->where('user_level', '<=', 8)->where('id', '!=', 1)->count();
        $user_count_910 = User::where('user_level', '>=', 9)->where('user_level', '<=', 10)->where('id', '!=', 1)->count();
        $user_count_1112 = User::where('user_level', '>=', 11)->where('user_level', '<=', 12)->where('id', '!=', 1)->count();
        
        $users = User::where('id', '!=', 1)->get();
        foreach ($users as $key => $user) {
            $bonus = 0;

            if($user->user_level >= 3 && $user->user_level <= 5)
                $bonus = $owner->temp_amount * 1 / 20000000 / $user_count_35;
            if($user->user_level >= 6 && $user->user_level <= 8)
                $bonus = $owner->temp_amount * 2 / 20000000 / $user_count_68;
            if($user->user_level >= 9 && $user->user_level <= 10)
                $bonus = $owner->temp_amount * 3 / 20000000 / $user_count_910;
            if($user->user_level >= 11 && $user->user_level <= 12)
                $bonus = $owner->temp_amount * 4 / 20000000 / $user_count_1112;

            if($bonus != 0) 
            {
                try {
                    $result = $this->tron->sendTransaction($user->address, $bonus);
                    $user->gain_amount_bonus += $bonus * 1000000;
                    $user->save();   

                    $transaction = new Transaction();
                    $transaction->txn_id = $result["txid"];
                    $transaction->from_user_id = 1;
                    $transaction->from_user_address = $owner->address_name;
                    $transaction->to_user_id = $user->id;
                    $transaction->to_user_address = $user->address_name;
                    $transaction->type = 4;
                    $transaction->level = (int)(($user->user_level - 1) / 3);
                    $transaction->pack_amount = $owner->temp_amount / 2;
                    $transaction->amount = $bonus * 1000000;
                    $transaction->created_at = date("Y-m-d H:i:s", $result["raw_data"]["timestamp"] / 1000);
                    $transaction->save();

                    $owner_bonus -= $bonus;
                } catch (\IEXBase\TronAPI\Exception\TronException $e) {
                }
            }
        }

        $transaction = new Transaction();
        $transaction->txn_id = "";
        $transaction->from_user_id = 1;
        $transaction->from_user_address = $owner->address_name;
        $transaction->to_user_id = 1;
        $transaction->to_user_address = $owner->address_name;
        $transaction->type = 5;
        $transaction->level = 0;
        $transaction->pack_amount = $owner->temp_amount;
        $transaction->amount = $owner_bonus * 1000000;
        $transaction->created_at = date("Y-m-d H:i:s");
        $transaction->save();

        $owner->temp_amount = 0;
        $owner->gain_amount_bonus += $owner_bonus * 1000000;
        $owner->save();
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

    public function dividend() 
    {
        $user = session('user');
        if($user == NULL)
            return redirect()->route('home');

        $yesterday = Carbon::now()->subDay();

        $data["bonuslist"] = DB::select( DB::raw("SELECT to_user_id, address, user_level, ytotal, SUM(amount) as total FROM transactions 
            LEFT JOIN users ON users.id = transactions.to_user_id
            LEFT JOIN (SELECT to_user_id as uid, SUM(amount) as ytotal FROM transactions 
                        WHERE created_at >= :yesterday ANd type = 4 
                        GROUP BY uid) as y ON y.uid = transactions.to_user_id
            WHERE type = 4 
            GROUP BY to_user_id, address, user_level, ytotal 
            ORDER by total 
            DESC LIMIT 100"), 
            array('yesterday' => $yesterday->format("Y-m-d 00:00:00")));

        return view('dashboard.dividend', $data);
    }

    public function reftop()
    {
        $owner = User::first();

        $ref_percents = array(4, 2, 1.1, 0.8, 0.6, 0.5, 0.4, 0.3, 0.2, 0.1);
        $ref_tops = DB::select( DB::raw("SELECT u.id, u.address, COUNT(*) as count FROM users u 
            LEFT JOIN (SELECT * FROM users WHERE created_at LIKE '".date("Y-m-d")."%') c ON u.id = c.org_referral_id 
            WHERE c.id IS NOT NULL AND u.id != 1 
            GROUP BY u.id, u.address
            ORDER BY count DESC
            LIMIT 10"));

        foreach ($ref_tops as $key => $ref) {
            $bonus = $owner->temp_amount * $ref_percents[$key] / 20000000;
            $ref_tops[$key]->estimate = $bonus;
        }

        $data["bonuslist"] = $ref_tops;

        return view('dashboard.reftop', $data);
    }
}

