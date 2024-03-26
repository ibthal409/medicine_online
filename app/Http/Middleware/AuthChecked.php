<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthChecked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)  {
    if (session('LoggedUser')){

        return $next($request);
    }else{
        return redirect('/login')->with(['error'=>'you are not logged in']);
    }
    }
}
