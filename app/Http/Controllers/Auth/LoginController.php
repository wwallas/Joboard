<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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


    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function __construct(){
        $this->middleware('guest')->except('destroy');
    }

    public function create(){
        // show login form
        return view('auth.login.create');
    }

    public function store(Request $request){

        if(! auth()->attempt(request(['email','password']))){
            session()->flash('errorMessage', 'Invalid credentials');
            return back()->withErrors([
                'message'=>'please check your credentials and try again'
            ]);
            // return redirect()->back();
            //return redirect('/auth/register');
        }

        //session()->flash('message', 'You have successfully logged in');
        return view('/displaymenu');
        //return redirect('/members-only');
    }

    public function destroy(){
        auth()->logout();

        // return redirect('/auth/login');
        return redirect('/');
    }
}
