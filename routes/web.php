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
Route::get('/Todo','TodoController@index')->name('TodoIndex');
Route::get('/Todo/new','TodoController@new_form')->name('TodoNewForm');
Route::post('/Todo','TodoController@add')->name('TodoCreate');
Route::get('/Todo/{id}/detail','TodoController@detail')->name('TodoDetail');
Route::get('/Todo/{id}/delete', 'TodoController@delete')->name('TodoDelete');
Route::get('/Todo/edit/{id}','TodoController@edit')->name('TodoEditForm');
Route::post('/Todo/edit/{id}','TodoController@update')->name('TodoUpdate');
Route::get('/Todo/finished', 'TodoController@finishedtodo')->name('TodoFinished');
