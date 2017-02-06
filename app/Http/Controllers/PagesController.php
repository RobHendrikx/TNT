<?php

namespace App\Http\Controllers;

use App\Instanties;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Users;

class PagesController extends Controller
{
	public function getIndex() {
        $instances = Instanties::all();
		return view('pages.home')->with('data', $instances);
	}

	public function getLogin() {
		return view('pages.login');
	}

	public function getSignup() {
		return view('pages.signup');
	}
}
