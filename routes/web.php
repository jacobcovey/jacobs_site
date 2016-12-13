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

Route::get('/', 'PageController@home');
Route::get('/resume', 'PageController@home');
Route::get('/portfolio', 'PageController@portfolio');
Route::get('/book_review', 'PageController@BookReview');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
