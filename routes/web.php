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

Route::get('/', 'PagesController@home');


// Articles 
Route::get('articles/create', 'ArticlesController@create');
Route::post('articles/create', 'ArticlesController@store');
Route::get('/article/{id?}', 'ArticlesController@show');

//Answers
Route::get('answers/create', 'AnswersController@create');
Route::post('answers/create', 'AnswersController@store');

Auth::routes();

