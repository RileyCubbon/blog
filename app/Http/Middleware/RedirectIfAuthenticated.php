<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  null|string $reddirect
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $reddirect = null, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $reddirect = is_null($reddirect) ? \URL::previous() : route($reddirect);
            return redirect($reddirect);
        }

        return $next($request);
    }
}
