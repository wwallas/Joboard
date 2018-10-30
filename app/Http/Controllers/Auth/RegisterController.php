<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\User;
use App\Profile;

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
    public function create(){
        // show the registration form
        return view('auth.register.create');

    }

    public function store(Request $request){

        // validate the form
        $data = $request->validate([
            'name'      =>      'required|min:2|max:20',
            'email'     =>      'required|email|max:40',
            'password'  =>      'required|min:6|max:20|confirmed'
        ]);
        //Encript the password
        $data['password'] = bcrypt($data['password']);

        // store new user row
        //dd($data);

        $user = User::create($data);
        //dd($user);

        $profileId = Profile::where('user_id', '=', $user->id)->count();
        // dd($profileId);

        if($profileId == 0){
            $data['user_id']= $user->id;
            $data['location']= 'Calgary';



            //dd($data);
            //set the $post variable, so the ID of our new row is accesible there
            $profile = Profile::create($data);
            // dd($profile);
        }
        auth()->login($user);
        //redirect to the home page
        session()->flash('message', 'You have successfully registered an account');
        //return redirect()->home;

        return redirect('/profile/index');
    }

}
