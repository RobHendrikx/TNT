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

        $codes = DB::table('codes')->get();
        if($request->signup_code == $codes[0]->signup_code){
            $code = $request->signup_code;
        }elseif($request->signup_code == $codes[1]->signup_code){
            $code = $request->signup_code;
        }else{
            return redirect()->route('getSignup')->withErrors('De registratiecode is incorrect');
        }

        $user = new Users;

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($code == 'ROC') {
            $user->isAdmin = 1;
        }

        $user->save();

        if ($code == 'ROC') {
            return redirect()->route('getLogin')->withSuccess('Registratie succesvol');
        }

        $message = 'Volgende stappen zijn vereist om registratie te voltooien';
        Session::put('company', true);
        Session::put('userid', $user->id);
        return redirect()->route('getCompany', $user->id)->withSuccess($message);



    }
    public function getCompany ($id) {
        return view('pages.company')->withUser(DB::table('users')->where('id', '=', $id)->first());
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
        if ($user->isAdmin == 1) {
            Users::login($user);
        }else{
    	    Users::login($user, true);
    	    if(empty($user->fk_company) && $user->fk_company != 0){
                $message = 'Deze pagina moet nog ingevuld worden om de registratie te voltooien';
                return redirect()->route('getCompany', $user->id)->withWarning($message);
            }
        }

        return redirect()->route('getHome');


    }

    public function logout () {
        Users::Logout();
        return redirect()->route('getLogin');

    }

    public function postCompanySave(Request $request, $id)
    {
        DB::table('users')->where('id', '=', $id)->first();

        $this->validate($request, array(
            'name' => 'required|max:255|unique:company',
            'email' => 'required|email|unique:company',
            'starttime' => 'required|date_format:G:i:s',
        ));

        /**
         * Insert company into database
         * Returns id from inserted company
         */
        $company = DB::table('company')->insertGetId(
            [
                'name' => $request->name,
                'email' => $request->email,
                'starttime' => $request->starttime,
            ]
        );

        /**
         * Update user company
         */
        DB::table('users')
            ->where('id', $id)
            ->update(
                [
                    'fk_company' => $company
                ]
            );

        $message = 'Uw bedrijf, '. DB::table('company')->where('id', '=', $company)->first()->name .', is geregistreerd en gelinkt aan uw account. Log nu in alstublieft.';
        return redirect()->route('getLogin')->withSuccess($message);
    }
}
