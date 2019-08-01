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
Route::post('package/add', 'PackageController@add');
Route::get('package', 'PackageController@show');
Route::get('package-add', 'PackageController@showFormAdd');
Route::post('package/{id}/edit', 'PackageController@edit');
Route::delete('package/{id}/delete', 'PackageController@delete');

Route::post('question-add', 'QuestionController@add');
Route::get('question', 'QuestionController@show');
Route::get('question/add/', 'QuestionController@showFormAdd');
Route::post('question/{id}/edit', 'QuestionController@edit');
Route::delete('question/{id}/delete', 'QuestionController@delete');




Route::get('play','PlayController@index')->name('game.play');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('request/{id}', 'GetRequestController@getRequest')->name('request');

