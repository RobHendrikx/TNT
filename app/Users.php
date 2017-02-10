<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class Users extends Model
{
	public static function exist() {
		if (Session::has('user')) {
			return true;
		}
		return false;
	}

    public static function Login($user, $company = false) {
    	Session::put('user', $user);
    	if($company){
            Session::put('company', true);
            Session::put('userid', $user->id);
        }

    	return true;
    }

    public static function isAdmin () {
        if (self::exist()) {
            if (Session::get('user')->isAdmin == 1) {
                return true;
            }
        }
        return false;
    }

    public static function Logout() {
    	Session::forget('user');
    	return true;
    }
}
