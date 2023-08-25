<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(): mixed
    {
        $user =  new \stdClass();
        $user->firstName = "Joab";
        $user->lastName = "Torres Alencar";
        $user->age = 30;
        $user->email = "joabtorres1508@gmail.com";

        $userTwo =  new \stdClass();
        $userTwo->firstName = "Carlos";
        $userTwo->lastName = "Silva";
        $userTwo->age = 22;
        $userTwo->email = "carlossilva@gmail.com";

        $users = [
            $user,
            $userTwo
        ];

        $dataView = [
            'user' => $user,
            "html" => "<b style='color:red'>Negrito de cor vermelha </b>",
            'users' => $users
        ];
        return view('bemvindo', $dataView);
    }

    public function includeAction(): mixed
    {
        $post = new \stdClass();
        $post->title = "Titulo 1";
        $post->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s";
        $posts = null;
        for ($i = 1; $i <= 5; $i++) {
            $post = new \stdClass();
            $post->title = "Titulo {$i}";
            $post->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s";
            $post->link = "{$i}";
            $posts[] = $post;
        }

        return view('include', ['posts' => $posts]);
    }
    public function exercise(): mixed
    {
        $users = [
            [
                'name' => 'Aline',
                'gender' => 'feminino',
                'image' => 'https://i.pravatar.cc/200?img=' . rand(1, 50),
                'follow' => 987456
            ],
            [
                'name' => 'Vanessa',
                'gender' => 'feminino',
                'image' => 'https://i.pravatar.cc/200?img=' . rand(1, 50),
                'follow' => 546521
            ],
            [
                'name' => 'Enzo',
                'gender' => 'masculino',
                'image' => 'https://i.pravatar.cc/200?img=' . rand(1, 50),
                'follow' => 456212
            ],
            [
                'name' => 'Gustavo',
                'gender' => 'masculino',
                'image' => 'https://i.pravatar.cc/200?img=' . rand(1, 50),
                'follow' => 124521
            ],
        ];
        return view('persons', ['users' => $users]);
    }

    public function layout(): mixed
    {
        return view('site');
    }


    public function layout2(): mixed
    {
        return view('site2');
    }
}
