<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search-people');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $client = new Client();
        $url = "https://swapi.dev/api/people/?search=$search";
        $response = $client->get($url);
        $data = json_decode($response->getBody(), true);

        return view('search-people', compact('data'));
    }
}
