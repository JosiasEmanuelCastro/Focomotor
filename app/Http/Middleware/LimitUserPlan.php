<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LimitUserPlan
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
        
        if (auth()->user()->articles()->count() >= auth()->user()->plan->articles_limit) {
            return response()->view('users.dashboard', ['error' => 'Ya has alcanzado el limite de publicaciones'], 403);
        }

        return $next($request);
    }
}
