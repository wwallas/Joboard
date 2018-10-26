<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Webtechno;
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
// dd($techid);
        $matchThese = ['webtechno_id' => $techid, 'user_id' => $id];
        $restech= ProfileWebteche::where($matchThese)->count();
        //dd($restech);

        if($restech == 0){
            $data['user_id']= auth()->user()->id;
            $data['webtechno_id']= $techid;

            //dd($data);
            //set the $follower variable, so the ID of our new row is accesible there
            $addtech = ProfileWebteche::create($data);
            dd($addtech);


        }
        // dd($techs);
		// return view('admin.testimonials.index', compact('testimonials'));
return back();

        // return view('profile.profileupdate', compact('techs'))->with('user', $user);
        // return redirect('invoice/create/'.$invoice_id)->with($invoice_id);

    }
}
