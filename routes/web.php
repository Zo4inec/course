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

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post:slug}', 'PostsController@show');

Route::get('/contacts', 'FeedbacksController@create');
Route::get('/admin/feedbacks', 'FeedbacksController@index');
Route::post('/admin/feedbacks', 'FeedbacksController@store');

Route::get('/about', function () {
    return view('about');
});
