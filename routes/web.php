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

Route::resource('Comments','CommentController');

// Authentication routes
Route::get('Auth/login', 'Auth\LoginController@getlogin');
Route::post('Auth/login', 'Auth\LoginController@getlogin');
Route::get('Auth/logout', 'Auth\LoginController@getlogout');

// Registration routes
Route::get('Auth/register', 'Auth\RegisterController@getregister');
Route::post('Auth/register', 'Auth\RegisterController@getregister');

// Route::resource('/index', 'Auth\LoginController')->name('login');

// Route::get('/index', 'HomeController@index')->name('index');

// Route::resource('/books', [
//     'uses' => 'Auth\LoginController@__construct',
//     'as' => 'login'
// ]);
?>
