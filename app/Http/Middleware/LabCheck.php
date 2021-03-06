<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LabCheck
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
        if (session('role') == 2){
            return $next($request);
        }
        return redirect()->route('logout')->with('msg', 'Unauthorized Action Performed');
    }
}
