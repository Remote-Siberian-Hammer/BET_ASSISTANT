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


// Рендер главной страницы
Route::get('/', [\App\Http\Controllers\HomeController::class, 'get'])
    ->name('home');

// Рендер страницы регистрации
Route::get('/registration', [\App\Http\Controllers\RegistrationViewController::class, 'get'])
    ->name('user.registration');
Route::post('/post/registration', [\App\Http\Controllers\RegistrationViewController::class, 'post'])
    ->name('user.post.registration');

// Рендер страницы входа
Route::get('/login', [\App\Http\Controllers\LoginViewController::class, 'get'])
    ->name('user.login');
Route::post('/post/login', [\App\Http\Controllers\LoginViewController::class, 'post'])
    ->name('user.post.login');

// Маршрут запроса на смену пароля
Route::post('/reset/to/password', [\App\Http\Controllers\ResetToPasswordController::class, 'post'])
    ->name('user.reset.to.password');
