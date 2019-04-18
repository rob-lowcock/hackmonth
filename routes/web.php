<?php

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
    return view('welcome');
});

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback')->name('loginCallback');

Route::get('sso', 'Auth\SSOController@handleLogin')->name('sso');

Route::get('user/edit', 'UserController@edit');
Route::resource('user', 'UserController')->only([
    'show'
]);
