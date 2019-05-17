<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
            ->scopes(['repo', 'write:repo_hook', 'read:user', 'user:email'])
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
        $userSocial = Socialite::driver('github')->stateless()->user();

        $user = User::where(['email' => $userSocial->getEmail()])->first();

        if (!$user) {
            $user = User::create([
                'name' => $userSocial->getName(),
                'nickname' => $userSocial->getNickname(),
                'email' => $userSocial->getEmail(),
                'image' => $userSocial->getAvatar(),
                'provider_id' => $userSocial->getId(),
                'provider' => 'github',
                'github_token' => $userSocial->token,
            ]);
        } else {
            $user->github_token = $userSocial->token;
            $user->save();
        }

        Auth::login($user, true);
        $redirect = $request->input('redirect');
        if ($redirect) {
            Log::debug('Redirect URL detected. Redirecting user back to: ' . $redirect);
            return redirect($redirect);
        }

        return redirect()->route('home');
    }
}
