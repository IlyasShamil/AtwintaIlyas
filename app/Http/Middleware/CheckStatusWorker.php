<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckStatusWorker
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
        if (Auth::user() && (Auth::user()->isAdministrator() or Auth::user()->isWorker())) {
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}
