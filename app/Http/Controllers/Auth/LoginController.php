<?php

namespace App\Http\Controllers\Auth;
use App\User;
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
    protected $redirectTo = 'admin';

    // if(Auth::user()->hasRole('AdminTractor')){
    //     protected $redirectTo = '/admin';
    // }else if(Auth::user()->hasRole('mod')){
    //     protected $redirectTo = '/admin/giaovien';
    // }else if(Auth::user()->hasRole('hocsinh')){
    //     protected $redirectTo = '/admin/hocsinh';
    // }else{
    //     protected $redirectTo = '/home';
    // }
    // protected function redirectTo()
    // {
    //     $user = Auth::user();
    //     //dd($user->hasRole('AdminTractor'));

    //     if ($user->hasRole('AdminTractor')) {
    //         return route('admin');
    //     }

    //     if ($user->hasRole('mod')) {
    //         return route('giaovien');
    //     }

    //     if($user->hasRole('hocsinh')){
    //         return route('hocsinh');
    //     }

    //     protected $redirectTo = '/home';
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
