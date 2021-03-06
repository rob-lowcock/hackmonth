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
})->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback')->name('loginCallback');

Route::get('sso', 'Auth\SSOController@handleLogin')->name('sso');

Route::resource('user', 'UserController')->only([
    'show'
]);

Route::get('project/edit', 'ProjectController@edit')->name('edit_project');
Route::post('project/save', 'ProjectController@save')->name('save_project');
