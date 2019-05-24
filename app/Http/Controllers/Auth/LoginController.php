<?php

namespace Iplayfootball\Http\Controllers\Auth;

use Iplayfootball\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 9:
            $this->redirectTo = '/admin';
            return $this->redirectTo;
                break;
            case 6:
                    $this->redirectTo = '/team';
                return $this->redirectTo;
                break;
            case 8:
                $this->redirectTo = '/player';
                return $this->redirectTo;
                break;
            case 5:
                    $this->redirectTo = '/academic';
                return $this->redirectTo;
                break;
            case 7:
                $this->redirectTo = '/scout';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}
