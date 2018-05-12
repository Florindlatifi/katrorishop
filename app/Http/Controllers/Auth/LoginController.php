<?php

namespace App\Http\Controllers\Auth;

use View;
use App\Category;
use App\Location;
use Auth;
use App\User;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        View::share('categories', Category::all());
        View::share('locations', Location::all());
    }



/****************** Social Authentication (GOOGLE)*******************/
    public function redirectToProviderGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallbackGoogle()
    {
        $user = Socialite::driver('google')->user();
        if(!Auth::check()){
            $authUser = $this->findOrCreateUser($user);
            Auth::login($authUser, true);
        }
        return redirect()->route('index');
    }
/*********************************************************************/

/****************** Social Authentication (FACEBOOK)*******************/
    public function redirectToProviderFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallbackFacebook()
    {
        $user = Socialite::driver('facebook')->user();
        if(!Auth::check()){
            $authUser = $this->findOrCreateUser($user);
            Auth::login($authUser, true);
        }
        return redirect()->route('index');
    }
/*********************************************************************/

    public function findOrCreateUser($user)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }else{
            return User::create([
                'name'     => $user->name,
                'email'    => $user->email,
                'password' => bcrypt(str_random(10)),
            ]);
        }
        
    }

}



/****************** Social Authentication (GOOGLE)*******************
public function redirectToProvider()
{
    return Socialite::driver('google')->redirect();
}

public function handleProviderCallback()
{
    $user = Socialite::driver('google')->user();

    $authUser = $this->findOrCreateUser($user);
    Auth::login($authUser, true);
    return redirect()->route('index');
}


public function findOrCreateUser($user)
{
    $authUser = User::where('email', $user->email)->first();
    if ($authUser) {
        return $authUser;
    }else{
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => bcrypt(str_random(10)),
        ]);
    }
    
}
********************************************************/