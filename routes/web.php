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
        Route::get('/', function() {
            if (Auth::check()) {
                return redirect()->route('home');
            }

            return redirect()->route('login');
        });
        Route::controller(HomeController::class)->group(function() {
            Route::get('/dashboard', 'index')->name('home');
        });

        Route::group(['namespace' => 'Auth', 'controller' => LoginController::class], function() {
            Route::get('/logout', 'logout')->name('logout');
        });
    });

});
