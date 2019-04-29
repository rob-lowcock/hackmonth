<?php

namespace App\Http\Controllers;

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
        return view('user.profile');
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

        dd($repos);
        return view('user.edit');
    }
}
