<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\API\V1\PlaylistController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::get('/generate/token', [TokenController::class, 'generate']);

Route::middleware('client')->group(function () {
    Route::get('/playlist', [PlaylistController::class, 'index']);
});
