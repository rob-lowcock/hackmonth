<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
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
        dd(Auth::user());
        return view('user.edit');
    }
}
