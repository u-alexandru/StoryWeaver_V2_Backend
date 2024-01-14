<?php

use App\Models\Novels\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Create route group for novels

Route::group(['prefix' => 'novels'], function () {
    Route::get('/test', function() {
        return Novel::with('typology', 'genres', 'tags', 'chapters')->get();
    });
});
