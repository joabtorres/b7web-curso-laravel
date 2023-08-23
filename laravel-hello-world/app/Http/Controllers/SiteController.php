<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        $user =  new \stdClass();
        $user->firstName = "Joab";
        $user->lastName = "Torres Alencar";
        $user->age = 30;
        $user->email = "joabtorres1508@gmail.com";

        $dataView = [
            'user' => $user
        ];
        return view('bemvindo', $dataView);
    }
    public function exit()
    {
        return view('exit');
    }
    public function user(Request $req)
    {
        $data = [
            'id' => $req->id
        ];

        return view('user', $data);
    }
    public function users(Request $req){
        $data = [
            'page' => $req->page
        ];
        dump($data);
    }
}
