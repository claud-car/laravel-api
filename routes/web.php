<?php

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

Route::get('/', function () {
    return view('comics');
});

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')
    ->group(function ()
    {
        Route::get('/profile', 'UserController@profile')->name('profile');
        Route::get('/generate-token', 'UserController@GenerateToken')->name('generate-token');
    });

Route::get('/home', 'HomeController@index')->name('home');
