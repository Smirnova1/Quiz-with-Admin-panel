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

Auth::routes();
Route::get('/', 'IndexController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/topics', 'TopicController@index');
Route::get('/topics/{topic}', 'TopicController@show');
Route::post('/results', 'ResultController@store');
Route::get('/results/{result}', 'ResultController@show');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'Admin\IndexController@index');
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('topics', 'Admin\TopicController');
    Route::resource('questions', 'Admin\QuestionController');
    Route::resource('options', 'Admin\OptionController');
});