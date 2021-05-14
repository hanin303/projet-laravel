<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            //return redirect(RouteServiceProvider::HOME);
            if (Auth::user()->admin) {
                return '/admin'; 
                }
                return '/home';
            }
           /* $role = Auth::user()->role;
            switch($role) {
                case 'role1' :
                    return 'Primary_Admin';
                    break;
                case 'role2' :
                    return 'Full_Access_Admin';
                    break;
                case 'role2' :
                    return 'Limited_Access_Admin';
                    break;
                         default :
                         break;  
                }*/
        return $next($request);
    }
}
