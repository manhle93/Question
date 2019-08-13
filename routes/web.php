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

Route::get('/', 'HomeController@index')->name('home');;
Route::post('package/add/', 'PackageController@add');
Route::get('package', 'PackageController@show');
Route::get('packageadd', 'PackageController@showFormAdd');
Route::post('package/{id}/edit', 'PackageController@edit');
Route::delete('package/{id}/delete', 'PackageController@delete');

Route::post('questionadd', 'QuestionController@add');
Route::get('question/{id}', 'QuestionController@show');
Route::get('answer', 'QuestionController@showAnswer');

Route::get('question/add/{id}', 'QuestionController@showFormAdd');
Route::post('question/{id}/edit', 'QuestionController@edit');
Route::delete('question/{id}/delete', 'QuestionController@delete');



Route::get('play','PlayController@index')->name('game.play');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('request/{id}/{turnid}', 'GetRequestController@getRequest')->name('request');
Route::get('getpackge','PlayController@getPackage')->name('get.package');
Route::get('getallpackge/{id}','PlayController@getAllPackage')->name('get.packageall');
Route::post('updatepoint/{id}','PlayController@UpdatePackage')->name('update.packageall');
Route::get('gettotalpoint/{id}','PlayController@getTotalPoint')->name('ge.total');
Route::post('resetpoint/{id}','PlayController@resetPoint')->name('reset.point');
Route::get('getdetailpackage/{id}','PlayController@getDetailPackage')->name('get.detailPackage');


