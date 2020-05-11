<?php

namespace App\Http\Controllers;
use App\Product;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;



class ChatsController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->get('');
        return $response;
        return view('ChatsController/show',compact('response'));
    }

}