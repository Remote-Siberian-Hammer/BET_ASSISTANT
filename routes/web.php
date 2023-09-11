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

Route::prefix('admin')->group(function () {
    Route::get("home", [\App\Http\Controllers\Admin\HomeAdminController::class, 'home'])
        ->name("admin.home.page");

    Route::prefix('rapid')->group(function () {
        Route::get("/", [\App\Http\Controllers\Admin\RapidAccountsController::class, 'rapid_parser'])
            ->name("admin.rapid_parser.page");
            
        Route::prefix('account')->group(function () {
            Route::get("/list", [\App\Http\Controllers\Admin\RapidAccountsController::class, 'rapid_account_list'])
                ->name("admin.rapid_account_list.page");
            Route::get("/create", [\App\Http\Controllers\Admin\RapidAccountsController::class, 'rapid_account_create'])
                ->name("admin.rapid_account_create.page");
            Route::get("/show/{rapid_account_id}", [\App\Http\Controllers\Admin\RapidAccountsController::class, 'rapid_account_show'])
                ->name("admin.rapid_account_show.page");
            
                Route::prefix('post')->group(function () {
                    Route::post("/create", [\App\Http\Controllers\Admin\PostRapidAccountsController::class, 'create'])
                        ->name("admin.rapid_account.create");
                    Route::post("/delete", [\App\Http\Controllers\Admin\PostRapidAccountsController::class, 'update'])
                        ->name("admin.rapid_account.update");
                    Route::post("/delete", [\App\Http\Controllers\Admin\PostRapidAccountsController::class, 'delete'])
                        ->name("admin.rapid_account.delete");
                });
        });
    });
});