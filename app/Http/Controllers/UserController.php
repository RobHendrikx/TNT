<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Users;
use Session;
use Hash;
use DB;


class UserController extends Controller
{
    public function postSignup (Request $request) {
    	$this->validate($request, array(
	        'username' 	=> 'bail|required|unique:users|max:16',
	        'email' 	=> 'bail|required|unique:users|email',
	        'password' 	=> 'bail|required|alphaNum|min:8',
	        'confirm' 	=> 'bail|required|same:password',
            'signup_code' => 'required',
	    ));

        $code = DB::table('codes')->where('id', '=', 1)->first();
        if($request->signup_code != $code->signup_code){
            return redirect()->route('getSignup')->withErrors('De registratiecode is incorrect');
        }

        $user = new Users;

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('getLogin')->withSuccess('Registratie succesvol');



    }

    public function postLogin (Request $request) {
    	$this->validate($request, array(
	        'username' => 'required',
	        'password' => 'required',
	    ));



    	$user = Users::where('username', $request->username)->first();
    	if (empty($user)) {
    		return redirect()->route('getLogin')->withErrors('Gebruikersnaam of Wachtwoord zijn incorrect');
    	}

    	if (!Hash::check($request->password, $user->password)) {
    		return redirect()->route('getLogin')->withErrors('Gebruikersnaam of Wachtwoord zijn incorrect');
    	}

        Users::login($user);
    	return redirect()->route('getHome');
    }

    public function logout () {
        Users::Logout();
        return redirect()->route('getLogin');

    }
}
