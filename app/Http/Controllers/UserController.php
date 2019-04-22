<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\GitHub\GitHubManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

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
        GitHub::extend('token', function() {
            echo "Yay!";
            return GitHub::connection('main');
        });

        GitHub::connection('token')->repo()->show('GrahamCampbell', 'Laravel-GitHub');

        dd(Auth::user());

//        $repos = GitHub::me()->repositories();
//        dd($repos);
        return view('user.edit');
    }
}
