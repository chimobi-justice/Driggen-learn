<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAuthUser
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
        if (auth()->check() && (auth()->user()->accountType === false)) {
            return redirect()->route('dashboard.users.index');
        }
        
        return $next($request);
    }
}
