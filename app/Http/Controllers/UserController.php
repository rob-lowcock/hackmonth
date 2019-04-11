<?php

namespace App\Http\Controllers;

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
}
