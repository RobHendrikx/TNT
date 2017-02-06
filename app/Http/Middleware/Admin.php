<?php

namespace App\Http\Middleware;

use App\Users;
use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        if(Users::exist()) {
            return $next($request);
        }else{
            return redirect()->route('getLogin')->withError('U moet eerst inloggen.');
        }
    }
}
