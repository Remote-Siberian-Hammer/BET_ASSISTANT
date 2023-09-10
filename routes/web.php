<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('post')->group(function () {
    Route::post("/registration", [\App\Http\Controllers\PostUserController::class, 'createUser'])
        ->name("registration.post");
    Route::post("/registration", [\App\Http\Controllers\PostUserController::class, 'authUser'])
        ->name("authorization.post");
    Route::post("/logout", [\App\Http\Controllers\PostUserController::class, 'logoutUser'])
        ->name("logout.post");
});

Route::get("/", [\App\Http\Controllers\Client\HomeController::class, 'getHome'])
    ->name("index.page");
Route::get("/auth", [\App\Http\Controllers\Client\UserController::class, 'getAuthorization'])
    ->name("auth.page");
Route::get("/registration", [\App\Http\Controllers\Client\UserController::class, 'getRegistration'])
    ->name("registration.page");
