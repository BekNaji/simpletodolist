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
Route::redirect('/','/todolist');
Route::get('/todolist','TaskController@index')->name('todolist');
Route::post('/store','TaskController@store')->name('store');
Route::post('/update','TaskController@update')->name('update');
Route::post('/delete','TaskController@delete')->name('delete');
