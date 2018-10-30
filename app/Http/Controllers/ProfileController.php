<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Technology;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $id= auth()->user()->id;
        $user = User::find($id);
        //dd($user);
//
        // $technos = DB::table('profiles')
        //     ->select('Technologys.id','Technologys.description')
        //     ->join('profile_webteches', 'users.id', '=', 'Technologys.user_id')
        //     ->where('profile_webteches.user_id', $user_id)
        //     ->orderby ('Technologys.description')->get();

        // dd($technos);
        // return view('profile.index')->with('technos', $technos, $user);

        return view('profile.index', compact('user'));

        // return view('/profile.index')->with('user', $user,'technos', $technos, $user->profile_webteches);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id= auth()->user()->id;
        $user = User::find($id);

        $techs = Technology::all();
		// return view('admin.testimonials.index', compact('testimonials'));

        return view('profile.profileupdate', compact('techs'))->with('user', $user);
        // return redirect('invoice/create/'.$invoice_id)->with($invoice_id);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id= auth()->user()->id;
        // dd($user_id);
        //Load a single profile
        // set up an array to be passed in to the post::create function


        $profileId = Profile::where('user_id', '=', $user_id)->count();
        //dd($profileId);

        if($profileId == 0){
            $data['user_id']= $user_id;

            $data['location']= request('location');

            //dd($data);
            //set the $post variable, so the ID of our new row is accesible there
            $profile = Profile::create($data);
        }
        $profile = Profile::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('profile.profiles')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id= auth()->user()->id;

        $user = User::find($user_id);
        $user->profile->location = $request->location;

        $user->profile->save();
// dd($user->profile);
        //return back();
        return view('profile.index')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
