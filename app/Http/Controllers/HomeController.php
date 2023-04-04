<?php

namespace App\Http\Controllers;

use Parsedown;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as ControllersController;

class HomeController extends ControllersController
{
    public function home()
    {
        return view("index", [
            "repos" => $this->queryGithubDatas("https://api.github.com/users/" . env('GITHUB_USER_NAME') . "/repos"),
        ]);
    }

    public function allRepos() {
        return view("works.index", [
            "repos" =>   $this->queryGithubDatas("https://api.github.com/users/" . env('GITHUB_USER_NAME') . "/repos"),
        ]);
    }

    function showRepo($id) {
        try {
            $repo = $this->queryGithubDatas("https://api.github.com/repositories/$id");
            if (isset($repo->message) && $repo->message == "Not Found") {
                abort(404, 'Page non trouvée');
            }
            
            return view("works.show", [
                "repo" => $repo,
                "readme" => $this->getReadmeContent($repo->id),
            ]);

        } catch (\Throwable $th) {
            abort(404, 'Page non trouvée');
        }
    }

    public function changeLocal(Request $request) {
        setcookie('lang', $request->has("check-lang") ? 'en' : 'fr', time() + (86400 * 30), "/");

        return redirect()->route("home");
    }

    function getReadmeContent($repoId) {
        $response = $this->queryGithubDatas("https://api.github.com/repositories/$repoId/readme");

        return Parsedown::instance()->text(base64_decode($response->content));
    }

    private function queryGithubDatas($url) {
        $data = file_get_contents($url, false, stream_context_create([
            'http' => [
                'header' => [
                    "User-Agent: PHP",
                    "Authorization: token " . env("GITHUB_TOKEN"),
                    "Accept: application/vnd.github.v3+json",
                ]
            ]
        ]));
        return json_decode($data);
    }

    public function resume()
    {
        return view("resume", [
            "resume" => url("/resumes/" . getLocal() . ".pdf"),
        ]);
    }
}
