<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use \App\Http\Controllers\apiController;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Favorites;
use DB;
use App\User;



class FavoritesController extends Controller
{
    public function index(Request $request) {
        $user = User::find(auth()->id());
        $faves = $user->favorites()->latest()->paginate(10);
        
        return view('favorites', compact('user', 'faves'));
    }






    public function store(Request $request)
    {



        // dd($request->all());
       
            $data['user_id'] = auth()->id();
            $data['title'] = request('title');
            $data['company']=request('company');
            $data['url'] = request('url');
    
            $faves=Favorites::create($data);
       
            // dd($faves);

        return redirect('favorites');
    }
}
