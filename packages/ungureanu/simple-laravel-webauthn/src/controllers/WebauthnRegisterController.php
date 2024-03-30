<?php

namespace Ungureanu\SimpleLaravelWebauthn\controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Ungureanu\SimpleLaravelWebauthn\WebAuthn;

class WebauthnRegisterController
{
    public function register(WebAuthn $webauthn, Request $request)
    {
        $request->validate([
            'username' => 'required|email',
        ]);

        // find or create the user with random password
        $user = User::firstOrCreate([
            'email' => $request->username
        ], [
            'password' => bcrypt(Str::random(16))
        ]);

        return response()->json($webauthn->getPublicKeyCredentialCreationOptions($request->username));
    }

    public function login(WebAuthn $webauthn)
    {
        return response()->json($webauthn->getPublicKeyCredentialRequestOptions());
    }
}
