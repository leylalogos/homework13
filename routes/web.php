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

Route::view('/','dashboard')->name('dashboard');
Route::get('chart','ChartController@index')->name('chart');
Route::get('lastuser','ChartController@showLastUserPost')->name('lastuser');
Route::get('posts','ChartController@showPost')->name('post');
Route::get('users','ChartController@showUser')->name('user');

Route::get('showform','LoginController@showLogin')->name('login');
Route::post('dologin','LoginController@doLogin')->name('dologin');
Route::get('index','CreatePostController@index')->name('post.index')->middleware('auth');
Route::post('create','CreatePostController@create')->name('post.create')->middleware('auth');

