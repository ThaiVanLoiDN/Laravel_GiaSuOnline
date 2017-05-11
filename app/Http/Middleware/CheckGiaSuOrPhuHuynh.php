<?php

namespace App\Http\Middleware;

use Closure;

class CheckGiaSuOrPhuHuynh
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
        if (!$request->session()->has('arLoginPhuHuynh') || !$request->session()->has('arLoginGiaSu')) {
            return redirect()->action("IndexController@index");
        }
        return $next($request);
    }
}
