<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class HomeController extends Controller
{
    public function index(){
        $client = new Client();
        $response = $client->request('GET', url('api').'/post');

        // echo $response->getStatusCode(); # 200
        // echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
        dd(json_decode($response->getBody()));
    	return view('home');
    }
}
