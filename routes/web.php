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
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('todo','TodoController@index')->name('todo');

Route::get('todo/delete/{id}','TodoController@destroy')->name('todo.delete');

Route::post('todo/add','TodoController@store')->name('todo.add');

Route::get('todo/edit/{id}', 'TodoController@edit')->name('todo.edit');
Route::post('todo/update/{id}', 'TodoController@update')->name('todo.update');
Route::get('todo/done/{id}', 'TodoController@done')->name('todo.done');
Route::get('todo/notdone/{id}', 'TodoController@notdone')->name('todo.notdone');

// Route::post('todo/update/{id}', 'TodoController@update')->name('todo.update');



