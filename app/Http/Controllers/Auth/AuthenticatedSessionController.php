<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\Auth\UserLoginDataResource;
use http\Client\Curl\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember_me');
        if (auth()->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $user = \App\Models\User::with('roles', 'roles.permissions')->findOrFail(auth()->user()->id);
            $userData = new UserLoginDataResource($user);
            return response()->json(['message' => 'Login successful', 'user' => $userData], 200);
        }
        return response()->json(['message' => 'Invalid credentials', 'type' => 'ERR_INVALID_CREDENTIALS'], 401);

    }

    public function passkeyAuth(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        return '';
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->noContent();
    }
}
