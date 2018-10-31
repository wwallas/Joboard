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
        dd($techs);



        $user->technologies()->attach($techid);

        //$user->technologies()->syncWithoutDetaching([$techid->id]);
        // if (! $user->technologies->contains($techid->id)) {
        //         $user->technologies()->save($techid);
        //
            //dd($data);
            //set the $follower variable, so the ID of our new row is accesible there
            $addtech = ProfileWebteche::create($data);
            // dd($addtech);


        }


        return back();

        // return view('profile.profileupdate', compact('techs'))->with('user', $user);
        // return redirect('invoice/create/'.$invoice_id)->with($invoice_id);
    }

    public function alltechno()
    {
        $user_id= auth()->user()->id;
        $user = User::find($user_id);

        
        dd($user->Technology);
// dd($user);
        // $technos = DB::table('profiles')
        //     ->select('Technologys.description')
        //     ->join('profiles', 'user.id', '=', 'Technologys.user_id')
        //     ->where('Technologys.user_id', $user_id)
        //     ->orderby ('Technologys.id')->get();

            // $technos = DB::table('profiles')
            // ->select('Technologys.description')
            // ->join('Technologys', 'profiles.user_id', '=', 'Technologys.user_id')
            // ->get();

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
