<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;


    protected $redirectTo = '/admin';


    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');

    }



    public function showLoginForm()
    {
        return view('admin.auth.login');
    }



    public function login(Request $request){
        $this->validate($request, [
            'email'     =>  'required|email',
            'password'  =>  'required|min:8'
        ]);

        if(Auth::guard('admin')->attempt([
            'email'     =>  $request->email,
            'password'  =>  $request->password
        ], $request->get('remember'))){
            return redirect()->intended(route('admin.dashboard'));
        }


        return back()->withInput($request->only(['email','password']));
    }



    public function logout(){
        Auth::guard('admin')->logout();

        request()->session()->invalidate();

        return redirect()->route('admin.login');
    }
}
