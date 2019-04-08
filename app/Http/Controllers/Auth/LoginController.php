<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @param Request $request
     * @return Response
     */
    public function redirectToProvider(Request $request)
    {
        Log::debug('Redirecting to github');
        Log::debug('Post-GitHub redirect URL set to: ' . $request->input('redirect'));
        return Socialite::driver('github')
            ->with(['redirect_uri' => env('GITHUB_CALLBACK_URL') . '?redirect=' . $request->input('redirect')])
            ->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @param Request $request
     * @return void
     */
    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('github')->user();

        Session::put('user', $user);
        Log::debug($request->getQueryString());

        $redirect = $request->input('redirect');
        if ($redirect) {
            Log::debug('Redirect URL detected. Redirecting user back to: ' . $redirect);
            return redirect($redirect);
        }

        dd($user);
        // $user->token;
    }
}
