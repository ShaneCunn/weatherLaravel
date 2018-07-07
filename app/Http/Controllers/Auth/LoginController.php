<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/weather';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  mixed $user
     * @return mixed
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request)
    {
        $request->session()->flash('flash_notification.success', 'You have logged in');
        return redirect()->intended($this->redirectPath());
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flash('flash_notification.warning', 'You have logged out');
        return view('test')->with('title', 'logout page');
    }
}
