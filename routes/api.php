<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::prefix('users')->group(function () {
    Route::middleware('auth')->group(function () {
         Route::get('/', [UserController::class, 'index']);
         Route::put('/', [UserController::class, 'update']);
         Route::delete('/', [UserController::class, 'destroy']);
     });
     Route::post('/', [UserController::class, 'create']);
 });

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});

Route::get('/me', [UserController::class, 'me']);