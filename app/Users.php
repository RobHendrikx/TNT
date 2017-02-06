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

    public static function Login($user) {
    	Session::put('user', $user);
    	return true;
    } 

    public static function Logout() {
    	Session::forget('user');
    	return true;
    }
}
