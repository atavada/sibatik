<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth('web')->user()->role == 'admin') {
            return $next($request);
    }

        return redirect('/')->with('error','You dont have permission to access this page.');
    }
}
