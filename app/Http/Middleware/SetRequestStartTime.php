<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetRequestStartTime
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $request->attributes->set("start_time", now());
        return $next($request);
    }
}
