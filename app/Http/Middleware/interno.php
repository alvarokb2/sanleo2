<?php

namespace Sanleo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class interno
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
        if(Auth::user()){
            $rol = Auth::user()->rol;
            if ($rol == 'educadora' or $rol == 'directora' or $rol == 'admin') {
                return $next($request);
            }
        }

        return Redirect::route('home');
    }
}
