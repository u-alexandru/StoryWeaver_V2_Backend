<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Services\WebAuthnService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebAuthnController
{
    public function register(WebAuthnService $webauthn, Request $request)
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

    public function login(WebAuthnService $webauthn)
    {
        return response()->json($webauthn->getPublicKeyCredentialRequestOptions());
    }
}
