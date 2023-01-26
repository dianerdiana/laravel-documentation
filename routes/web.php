<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'App\Http\Controllers'], function() {

    Route::group(['middleware' => ['guest']], function() {
        Route::group(['namespace' => 'Auth'], function() {
            Route::controller(LoginController::class)->group(function() {
                Route::get('/login', 'index')->name('login');
                Route::post('/login', 'login')->name('login.perform');
            });
        });
    });

    Route::group(['middleware' => ['auth']], function() {
        Route::controller(HomeController::class)->group(function() {
            Route::get('/home', 'index')->name('home');
        });

        Route::get('/dashboard', function () {
            return view('pages.dashboard.index');
        });
    });

});
