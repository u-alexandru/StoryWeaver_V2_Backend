<?php

use Illuminate\Support\Facades\Route;
use Ungureanu\SimpleLaravelWebauthn\controllers\WebauthnRegisterController;

Route::group([
    'prefix' => '/api/webauthn',
], function () {
    Route::post('/register', [WebauthnRegisterController::class, 'register'])
        ->middleware('guest')
        ->name('webauthn.register');

    Route::get('/login', [WebauthnRegisterController::class, 'login'])
        ->middleware('guest')
        ->name('webauthn.login');
});
