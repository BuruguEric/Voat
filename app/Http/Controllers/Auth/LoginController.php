<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use Socialite;
use Auth;
use Session;

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
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout' , 'userLogout']]); 
        
    }

    public function userLogout()
    {
        Auth::logout();
        Session::flash('success_logout','You have successfully logged out Come back soon');
        return redirect('/');
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    
    public function Callback($provider)
    {
        $userSocial = Socialite::driver($provider)->stateless()->user();
        $users = User::where(['email' => $userSocial->getEmail()])->first();

        if($users){
            Auth::login($users);
            Session::flash('success_login','Successfull login. Welcome Back');
            return redirect()->route('index');
        }else{

        $user = User::create([
            'name'          => $userSocial->getName(),
            'email'         => $userSocial->getEmail(),
            'image'         => $userSocial->getAvatar(),
            'provider_id'   => $userSocial->getId(),
            'provider'      => $provider,
        ]);
        Session::flash('success_register','Successfull register. Welcome to the Voat community');
         return redirect()->route('index');
        }
    }

    
}
