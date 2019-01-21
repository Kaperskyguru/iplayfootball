<?php

namespace App\Http\Middleware;

use Closure;
use  Illuminate\Support\Facades\Auth;
class RequireRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd($guard);
        if (Auth::check()) {

            $auth = Auth::user()->role;

            switch ($auth) {
                case 9:
                        return  redirect()->route('admin');    
                    break;
                case 8:
                        return  redirect()->route('player'); 
                    break;
                case 6:
                        return  redirect()->route('user');  
                    break;

                default:
                    # code...
                    return  redirect()->route('user');  
                    break;
            }
        }   

    }
}
