<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as ControllersController;
use Illuminate\Http\Request;

class HomeController extends ControllersController
{
    public function home()
    {
        return view("index", [
            "repos" => $this->getAllRepos(),
        ]);
    }

    public function allRepos() {
        return view("works.index", [
            "repos" => $this->getAllRepos(),
        ]);
    }

    function showRepo($id) {
        try {
            $data = file_get_contents("https://api.github.com/repositories/$id", false, stream_context_create([
                'http' => [
                    'header' => [
                        "User-Agent: PHP",
                        "Authorization: token " . env("GITHUB_TOKEN"),
                        "Accept: application/vnd.github.v3+json",
                    ]
                ]
            ]));
            $repo = json_decode($data);
        
            if (isset($repo->message) && $repo->message == "Not Found") {
                abort(404, 'Page non trouvée');
            }
        
            return view("works.show", [
                "repo" => $repo
            ]);

        } catch (\Throwable $th) {
            abort(404, 'Page non trouvée');
        }
    }

    private function getAllRepos()
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

    public function changeLocal(Request $request) {
        
        setcookie('lang', $request->has("check-lang") ? 'en' : 'fr', time() + (86400 * 30), "/");

        return redirect()->route("home");
    }
}
