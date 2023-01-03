<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfLoggedIn
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            return redirect()->route("admin-home");
        }

        return $next($request);
    }
}
