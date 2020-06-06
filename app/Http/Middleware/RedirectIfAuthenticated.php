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

        
            if (Auth::user()->admin()->exists()) {
           
                return redirect ('admin');
    
            } elseif (Auth::user()->medecin()->exists()) {
                
            return redirect ('medecin'); 
    
            }elseif (Auth::user()->patient()->exists()) {
    
                return redirect ('patient'); 
    
            }
            return redirect ('erreur'); 


        }

        return $next($request);
    }
}
