<?php

use App\Http\Controllers\API\Novels\LikeController;
use App\Models\Novels\Novel;
use App\Models\User;
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

// get admin permanent token
Route::get('/sanctum/token', function (Request $request) {
    $user = User::find(1);
    $token = $user->createToken('admin-token');
    return $token->plainTextToken;
});

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('like', [LikeController::class, 'like'])->name('like');
    Route::delete('like', [LikeController::class, 'unlike'])->name('unlike');
});

// Create route group for novels

Route::group(['prefix' => 'novels'], function () {
    Route::get('/test', function() {
        $novel = Novel::with('typology', 'genres', 'tags', 'chapters', 'chapters.comments', 'likes')->get()->first();
        return $novel;
    });
});
