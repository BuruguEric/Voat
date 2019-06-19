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

Route::group(['middleware' => ['web']], function (){
    // Pages routes
    Route::get('/', 'PagesController@index');
    Route::get('/top10', 'PagesController@top10')->name('top10');
    Route::get('/sports', 'PagesController@sports')->name('sports');
    Route::get('/aww', 'PagesController@aww')->name('aww');
    Route::get('/tv', 'PagesController@tv')->name('tv');
    Route::get('/music', 'PagesController@music')->name('music');
    Route::get('/gif', 'PagesController@gif')->name('gif');
    Route::get('/gaming', 'PagesController@gaming')->name('gaming');
    Route::get('/books', 'PagesController@books')->name('books');
    Route::get('/science', 'PagesController@science')->name('science');
    Route::get('/programming', 'PagesController@programming')->name('programming');
    Route::get('/technology', 'PagesController@technology')->name('technology');
    // User Functionality
    Route::get('/create' , 'PagesController@create')->name('create');
    Route::get('/Profile' , 'UserController@userDetails')->name('userProfile');
    Route::get('/UserPosts' , 'UserController@userPost')->name('userPosts');

    Route::match(['get','post'],'/Liked','VoteController@voteUp')->name('like');
    Route::match(['get','post'],'/Disliked','VoteController@voteDown')->name('dislike');

    Route::get('/comment', 'PagesController@comment')->name('comment');
    Route::resource('posts' , 'CommentController');
    Route::resource('Comments' , 'PostController');

    Route::post('/users/logout' , 'Auth\LoginController@userLogout')->name('user.logout');
    Route::get('Comments/{id}/delete' , 'CommentController@delete')->name('Comments.delete');
    Route::delete('Comments/{id}/delete' , 'CommentController@destroy')->name('Comment.destroy');
    // authentication routes
    Auth::routes();
    Auth::routes(['verify' => true]);

    Route::get('login/{provider}', 'Auth\LoginController@redirect')->where('provider','twitter|facebook|linkedin|google|github');
    Route::get('login/{provider}/callback','Auth\LoginController@Callback')->where('provider','twitter|facebook|linkedin|google|github');
    // Admin routes
    Route::get('/index', 'PagesController@index')->name('index');
    Route::match(['get','post'] , '/Admin', 'AdminController@login')->name('admin-dashboard');
    Route::post('/logout' , 'AdminController@logout')->name('admin.logout');


});

?>

