<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use apiController;
use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class FavoritesController extends Controller
{
    public function store(Request $request)
    {
        $data['user_id'] = auth()->id();
        $data['title'] = json_encode($job['title']);
        $data['company'] = json_encode($job['company']);
        $data['url'] = json_encode($job['url']);

    }
}
