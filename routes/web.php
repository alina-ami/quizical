<?php

use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\Brands\Auth\LoginController;
use App\Http\Controllers\Brands\HomeController;
use App\Http\Controllers\Brands\QuestionController;
use App\Http\Controllers\Web\HomeController as WebHomeController;
use App\Http\Controllers\Web\ProfileController as WebProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebHomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'login']);
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/profile', [WebProfileController::class, 'profile'])->name('profile');


Route::prefix('brands')->as('brands.')->group(function () {
    Route::prefix('auth')->as('auth.')->group(function () {
        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/login', [LoginController::class, 'doLogin'])->name('do-login');
        Route::get('/login/google', [LoginController::class, 'google'])->name('google');

        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/register', [LoginController::class, 'register'])->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('questions', QuestionController::class);
    });
});
