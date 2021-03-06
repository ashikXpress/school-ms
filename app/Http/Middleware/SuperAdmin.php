<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
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
        if (Auth::guard('employee')->check() && Auth::guard('employee')->user()->user_type == 'superadmin')
        {
            return $next($request);
        }
        return new Response(view('unauthorized')->with('role', 'Super admin'));

    }
}
