<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Teacher
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

        if (!Auth::guard('employee')->check() && Auth::guard('employee')->user()->user_type != 'teacher') {

            return redirect()->route('dashboard');
        }

     return $next($request);



    }
}
