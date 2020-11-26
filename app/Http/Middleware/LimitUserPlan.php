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
        //dd(auth()->user()->articles()->count());
        
        if (isset(auth()->user()->subscription) && (auth()->user()->subscription->status == 'pending')) {
            return response()->view('users.dashboard', ['error' => 'Tu subscripcion se encuentra pendiente de pago.'], 403);
        }

        if (auth()->user()->articles()->count() >= auth()->user()->subscription->plan->articles_limit) {
            return response()->view('users.dashboard', ['error' => 'Ya has alcanzado el limite de publicaciones'], 403);
        }

        return $next($request);
    }
}
