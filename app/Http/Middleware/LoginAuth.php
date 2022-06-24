<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;

class LoginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //echo"hi";
        // $path=$request->path();
        // if(($path=="login" || $path=="signup") && Session::get('user'))
        // {
        //     return view('user.dashboard');
        // }
        // elseif(($path!="login" && !Session::get('user')) && ($path!="signup" && !Session::get('user')))
        // {
        //     return view('welcome');
        // }
        // return $next($request);
    }
}
