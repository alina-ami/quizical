<?php

use App\Http\Controllers\Api\GoogleController;
use App\Http\Controllers\Brands\Auth\LoginController as BrandsLoginController;
use App\Http\Controllers\Web\Auth\LoginController as WebLoginController;
use App\Http\Controllers\Brands\HomeController;
use App\Http\Controllers\Brands\QuestionController;
use App\Http\Controllers\Web\HomeController as WebHomeController;
use App\Http\Controllers\Web\ProfileController as WebProfileController;
use App\Http\Controllers\Web\QuestionController as WebQuestionController;
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

Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::prefix('/')->as('web.')->group(function () {
    Route::as('auth.')->group(function () {
        Route::get('/login', [WebLoginController::class, 'login'])->name('login');
        Route::post('/login', [WebLoginController::class, 'doLogin'])->name('do-login');
        Route::get('/login/google', [WebLoginController::class, 'google'])->name('google');

        Route::get('/logout', [WebLoginController::class, 'logout'])->name('logout');
        Route::get('/register', [WebLoginController::class, 'register'])->name('register');
        Route::post('/register', [WebLoginController::class, 'doRegister'])->name('do-register');
    });

    Route::get('/', [WebHomeController::class, 'index'])->name('home');
    Route::prefix('/questions')->as('questions.')->group(function () {
        Route::get('/{question}/answer', [WebQuestionController::class, 'answer'])->name('answer');
        Route::post('/{question}/submit-answer', [WebQuestionController::class, 'storeAnswer'])->name('store-answer');
    });


    Route::prefix('/profile')->as('profile.')->group(function () {
        Route::get('/', [WebProfileController::class, 'profile'])->name('create');
        Route::post('/', [WebProfileController::class, 'store'])->name('store');
    });
});



Route::prefix('brands')->as('brands.')->group(function () {
    Route::prefix('auth')->as('auth.')->group(function () {
        Route::get('/login', [BrandsLoginController::class, 'login'])->name('login');
        Route::post('/login', [BrandsLoginController::class, 'doLogin'])->name('do-login');
        Route::get('/login/google', [BrandsLoginController::class, 'google'])->name('google');

        Route::get('/logout', [BrandsLoginController::class, 'logout'])->name('logout');
        Route::get('/register', [BrandsLoginController::class, 'register'])->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::resource('questions', QuestionController::class);
    });
});
