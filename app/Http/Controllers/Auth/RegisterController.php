<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use App\Notifications\UserActivate;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/email/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // dd();
        // $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string',
            'country' => 'required|string',
            'role' => 'required|string',
            'user_status' => 'required|integer',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'state' => $data['country'],
            'phone' => $data['phone'],
            'role' => $data['role'],
            'status_id' => $data['user_status'],
            'password' => Hash::make($data['password']),
            // 'token' => str_random(40) . time(),
        ]);

        // $user->notify(new UserActivate($user));
        // return $user;

    }

    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     event( new Registered($user = $this->create($request->all())));

    //     return redirect()->route('login')
    //     ->with('status' , "Congratulations! your account is registered, you will shortly receive an email to activate your account.");
    // }

    /**
     * @param $token
     */
    public function activate($token = null)
    {
        $user = User::where('token', $token)->first();

        if (empty($user)) {
            return redirect()->to('/')
                ->withErrors(['error' => 'Your activation code is either expired or invalid.']);
        }

        $user->update(['token' => null, 'status_id' => 1]);

        return redirect()->route('login')
            ->with('status', 'Congratulations! your account is now activated.');
    }
}
