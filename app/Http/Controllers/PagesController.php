<?php

namespace App\Http\Controllers;

use App\Instanties;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
	public function getIndex() {
        $instances = Instanties::all();
        $sortedInstances = array();
        if (Users::isAdmin()) {
            foreach($instances as $instance){
                $instance->fk_company = DB::table('company')->where('id', '=', $instance->fk_company)->first();
                $sortedInstances[] = $instance;
            }
        }else {
            foreach($instances as $instance){
                if ($instance->fk_company != Session::get('user')->fk_company) {
                    continue;
                }
                $instance->fk_company = DB::table('company')->where('id', '=', $instance->fk_company)->first();
                $sortedInstances[] = $instance;
            }
        }
		return view('pages.home')->withData($sortedInstances);
	}

	public function getLogin() {
		return view('pages.login');
	}

	public function getSignup() {
		return view('pages.signup');
	}
}
