<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Technology;
use App\ProfileWebteche;

use Auth;

class ProfileWebtecheController extends Controller
{
    public function __construct()
      {
          $this->middleware('auth');
      }

    public function create($techid)
    {
        $id= auth()->user()->id;
        $user = User::find($id);
        // dd($user->profile->technology);
        $techs = $user->profile->technology;
        
        $user->technologies()->attach($techid);
        return back();





        // return view('profile.profileupdate', compact('techs'))->with('user', $user);
        // return redirect('invoice/create/'.$invoice_id)->with($invoice_id);
    }

    public function alltechno()
    {
        $user_id= auth()->user()->id;
        $user = User::find($user_id);


        // dd($user->Technology);
        // return view('profile.index',compose($user->Technology));

        // dd($followers);
        //return view('profile.index')->with('technos', $technos, $user->profile_webteches);
    }

    public function destroy($techid)
    {
        $id= auth()->user()->id;
       $user = User::find($id);

        $user->technologies()->detach($techid);
        return back();
    }
}
