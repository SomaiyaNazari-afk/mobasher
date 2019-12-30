<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if(Auth::user()->user_type == 'admin')
        {
            return $next($request);
        }
        else
        {
             return redirect('/home').with('status', 'You are not Allowed to Admin Dashboard');
        }
    }
}
