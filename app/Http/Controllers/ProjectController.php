<?php

namespace App\Http\Controllers;

use App\Project;
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

        $project = $user->projects()->orderBy('created_at', 'desc')->first() ?? new Project();

        return view('project.edit', ['repos' => $repos, 'project' => $project]);
    }

    /**
     * Save the project details
     *
     * @param Request $request
     */
    public function save(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'repository' => 'required'
        ]);

        $user = Auth::user();

        return redirect('/user/' . $user->nickname);
    }
}
