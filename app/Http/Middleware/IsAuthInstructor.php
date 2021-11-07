<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAuthInstructor
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
        if (auth()->check() && (auth()->user()->accountType === true)) {
            return redirect()->route('dashboard.instructors.index');
        }
        
        return $next($request);
    }
}
