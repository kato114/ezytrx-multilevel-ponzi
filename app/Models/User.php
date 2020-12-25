<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    public static function get_ez1_children($user_id, $level)
    {
    	return static::where('user_level', '>=', $level)->where('org_referral_id', '=', $user_id)->get()->toArray();
    }

    public static function get_ez10_children($user_id, $level, $deep)
    {
    	$res = static::where('user_level', '>=', $level)->where('referral_id', '=', $user_id)->get()->toArray();

    	if($deep > 0) {
	        $teamlist = static::where('referral_id', '=', $user_id)->get();
	        foreach ($teamlist as $key => $member) {
	            $team = static::get_ez10_children($member->id, $level, $deep - 1);
	            $res = array_merge($res, $team);
	        }
        }

    	return $res;
    }
}
