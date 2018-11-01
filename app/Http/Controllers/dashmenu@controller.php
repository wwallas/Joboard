<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashmenu@controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user_id= auth()->user()->id;
        $user = User::find($user_id);

         return view('displaymenu');
    }
}
