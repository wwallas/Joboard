<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\apiController;
use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Favorites;


class FavoritesController extends Controller
{
    public function store(Request $request)
    {
        $data['user_id'] = auth()->id();
        $data['title'] = request('title');
        $data['company'] = request('company');
        $data['url'] = request('url');

        $faves=Favorites::create($data);

        return redirect('feed');
    }
}
