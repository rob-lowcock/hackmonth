<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SSOController extends Controller
{
    /**
     * Handle an SSO request from Discourse
     *
     * @param Request $request
     * @return void
     */
    public function handleLogin(Request $request)
    {
        $discourseSSOSecret = env('DISCOURSE_SSO_SECRET');
        if (is_null($discourseSSOSecret)) {
            abort(500, 'Discourse config not set');
        }

        // Query parameters:
        // sso=PAYLOAD
        // sig=SIG
        $payload = $request->query('sso');
        $sig = $request->query('sig');

        // 1. Validate signature
        if (hash_hmac('sha256', $payload, $discourseSSOSecret) != $sig) {
            abort(400, 'Signature does not match payload');
        }

        // 2. Perform authentication
        $user = Auth::user();

        if (is_null($user)) {
            Log::debug("No user in session. Redirecting to GitHub login controller");
            $redirectParams = [
                'sso' => $payload,
                'sig' => $sig
            ];

            $returnRedirect = route('sso') . '?' . http_build_query($redirectParams);
            $target = route('login') . '?redirect=' . $returnRedirect;
            return redirect($target);
        }

        $inputPayload = [];
        parse_str(base64_decode($payload), $inputPayload);

        // 3. Create new payload with nonce, email and external_id
        $outputPayload = base64_encode(http_build_query([
            'nonce' => $inputPayload['nonce'],
            'email' => $user->email,
            'external_id' => $user->id
        ]));
        $outputSig = hash_hmac('sha256', $outputPayload, $discourseSSOSecret);

        return redirect("https://discuss.hackmonth.org/session/sso_login?sso=$outputPayload&sig=$outputSig");
    }
}
