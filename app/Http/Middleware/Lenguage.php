<?php

namespace App\Http\Middleware;

use Closure;

class Lenguage
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
        if(\Session::has('lang')){
            \App::setLocale(\Session::get('lang'));
        }
        return $next($request);
    }
}
