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

Route::get('/', 'PagesController@index');
Route::get('/sports', 'PagesController@sports');
Route::get('/aww', 'PagesController@aww');
Route::get('/music', 'PagesController@music');
Route::get('/movies', 'PagesController@movies');
Route::get('/gif', 'PagesController@gif');
Route::get('/gaming', 'PagesController@gaming');
Route::get('/books', 'PagesController@books');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/index', 'HomeController@index')->name('index');

Route::get('/admin','AdminController@admin')->name('admin');

Route::get('login/{provider}', 'Auth\LoginController@redirect')->where('provider','twitter|facebook|linkedin|google|github');
Route::get('login/{provider}/callback','Auth\LoginController@Callback')->where('provider','twitter|facebook|linkedin|google|github');
?>