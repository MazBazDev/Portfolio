<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as ControllersController;

class HomeController extends ControllersController
{
    public function home()
    {
        return view("index", [
            "repos" => $this->getAllRepos(),
        ]);
    }

    public function getAllRepos()
    {
        $username = env("GITHUB_USER_NAME");

        $datas = file_get_contents("https://api.github.com/users/$username/repos", false, stream_context_create([
            'http' => [
                'header' => [
                    "User-Agent: PHP",
                    "Authorization: token " . env("GITHUB_TOKEN"),
                ]
            ]
        ]));

        return json_decode($datas);
    }
}
