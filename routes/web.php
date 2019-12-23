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

Route::get('/register', function () {
    return view('register');
});

Route::post('/register','UserController@register');


Route::get('/login','UserController@login_page');


Route::post('/login','UserController@login_process');


Route::get('/home','UserController@home_page');


Route::get('/logout','UserController@logout');


Route::get('/comments','UserController@comments_page_n_show');


Route::get('/addcomments','UserController@add_comments_show');


Route::post('/addcomments','UserController@add_comments_send');


