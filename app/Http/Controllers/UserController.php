<?php

namespace App\Http\Controllers;

use App\User;
use Github\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for the given user
     *
     * @param string $username
     * @return View
     */
    public function show(string $username) {
        $is_me = false;

        $current_user = Auth::user();

        if ($current_user) {
            $is_me = $username == $current_user->nickname;
        }

        $user = User::where('nickname', $username)->firstOrFail();
        $project = $user->projects->sortByDesc('created_at')->first();

        return view('user.profile', ['is_current' => $is_me, 'user' => $user, 'project' => $project]);
    }

    /**
     * Show the profile edit page
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

        return view('user.edit', ['repos' => $repos, 'project' => $project]);
    }
}
