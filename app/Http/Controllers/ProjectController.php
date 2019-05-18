<?php

namespace App\Http\Controllers;

use Github\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Show the project edit page
     *
     * @param Request $request
     * @return View
     */
    public function edit(Request $request) {
        $user = Auth::user();

        $client = new Client();
        $client->authenticate($user->github_token, null, Client::AUTH_URL_TOKEN);
        $repos = $client->currentUser()->repositories();

        $project = $user->projects()->orderBy('created_at', 'desc')->first();

        return view('project.edit', ['repos' => $repos, 'project' => $project]);
    }
}
