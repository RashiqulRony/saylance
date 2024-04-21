<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request){
        //validate the form data
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //attempt to log the user in
        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => "Admin"], $request->remember)){
            return redirect()->intended(route('admin.home'));
        }elseif(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => "User"], $request->remember)){
            return redirect()->intended(route('user.home'));
        }
        //if unsuccessful, redirect back with the form data
        return redirect()->back()->with('Input', $request->only('email', 'remember'))->withErrors(['email' => 'Invalid Email or Password']);
    }
}
