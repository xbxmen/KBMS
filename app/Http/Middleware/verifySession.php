<?php

namespace App\Http\Middleware;

use Closure;

class verifySession
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('id') && false) {
            return redirect('/');
        }

        return $next($request);
    }

}