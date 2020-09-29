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
    return view('welcome');
});
//------------------start admin --------------------
Route::get('admin','AdminController@getSignIn')->name('signIn.get');
Route::post('admin','AdminController@postSignIn')->name('signIn.post');
//dang ky
Route::get('admin-sign-up','AdminController@getSignUp')->name('signUp.get');
Route::post('admin-sign-up','AdminController@postSignUp')->name('signUp.post');

