<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Using Controller's
use App\Http\Controllers\Api\UserRequestController;
use App\Http\Controllers\Api\LanguageController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('user')->group(function () {
    Route::post('create', [UserRequestController::class, 'create']);
    Route::get('show/by/id/{user_id}', [UserRequestController::class, 'showById']);
    Route::get('show/by/email/{user_email}', [UserRequestController::class, 'showByEmail']);
    Route::post('reset/to/password', [UserRequestController::class, 'resetToPassword']);
    Route::post('auth', [UserRequestController::class, 'auth']);
    // Запросы с персональным токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::get('logout/{user_id}', [UserRequestController::class, 'logout']);
    });
});

Route::prefix('lang')->group(function () {
    Route::get('all/', [LanguageController::class, 'all']);
    Route::get('show/{language_id}', [LanguageController::class, 'show']);
    // Запросы с персональным токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::post('create', [LanguageController::class, 'create']);
        Route::get('delete/{language_id}', [LanguageController::class, 'delete']);
    });
    // Запросы для создания пользовательских сессий
    Route::prefix('session')->group(function () {
        Route::post('create', [LanguageController::class, 'sessionCreate']);
        Route::get('show/{user_id}', [LanguageController::class, 'sessionShow']);
        Route::post('update', [LanguageController::class, 'sessionUpdate']);
    });
});