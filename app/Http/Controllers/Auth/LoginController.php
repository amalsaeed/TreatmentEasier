<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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
        $this->middleware('guest:admin')->except('logout');
    }

    public function show_login_page()
    {
        return view('auth.login');
    }

    public function show_admin_login_page()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth('admin')->attempt(['email' => request('email'), 'password' => request('password')], request('remember'))) {
            return redirect()->intended('/admin');
        }

        return back()->withInput($request->only('email', 'remember'));
    }



    public function login(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:6'
        ]);

        $user =  Auth::attempt(['email' => request('email'), 'password' => request('password')], request('remember'));
        if ($user) {
            if(Auth::user()->user_type == 1){
                return redirect()->intended('/doctor/dashboard');
            }else{
                return redirect()->intended('/');
            }

        }

        return back()->withErrors(['Unauthorized'])->withInput($request->only('email', 'remember'));
    }
}
