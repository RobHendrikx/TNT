<?php

namespace App\Http\Middleware;

use App\Users;
use Closure;
use Illuminate\Support\Facades\Session;

class Company
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::get('company') == true && Session::get('userid') == $request->route('id')) {
            return $next($request);
        }
        Users::Logout();
        return redirect()->route('getLogin')->with('U mag deze pagina niet bekijken');
    }
}
