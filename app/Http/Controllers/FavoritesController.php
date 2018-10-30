<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use \App\Http\Controllers\apiController;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Favorites;
use DB;



class FavoritesController extends Controller
{
    public function index(Request $request) {
        $faves=Favorites::orderBy('created_at', 'desc')->paginate(3);
        dd($faves);
        return view('feed')->with('favorites',$fave);
    }






    public function store(Request $request)
    {
        // dd($request->all());
       
            $data['user_id'] = auth()->id();
            $data['title'] = request('title');
            $data['company']=request('company');
            $data['url'] = request('url');
    
            $faves=Favorites::create($data);
       
       

        return redirect('/feed');
    }
}
