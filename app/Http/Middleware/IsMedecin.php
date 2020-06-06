<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsMedecin
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
        if (Auth::user()) {

            
            if (Auth::user()->admin()->exists()) {
           
                return redirect ('admin'); 
    
            } elseif (Auth::user()->medecin()->exists()) {
                
                return $next($request);
    
            }elseif (Auth::user()->patient()->exists()) {
    
                return redirect ('patient'); 
    
            }
       
            
        }



        return redirect('/');
    }
}
