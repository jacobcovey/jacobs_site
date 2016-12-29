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

Route::get('/', 'PageController@about');
Route::get('/resume', 'PageController@home');
Route::get('/portfolio', 'PageController@portfolio');
Route::get('/book_review', 'PageController@BookReviewRating');
Route::get('/book_review/rating', 'PageController@BookReviewRating');
Route::get('/book_review/date', 'PageController@BookReviewDate');
Route::get('/book_review/author', 'PageController@BookReviewAuthor');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
