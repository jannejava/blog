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
Route::get('hello', function () {
    dd('hello!!!!');
});


Route::get('/', function () {
    return view('welcome');
});














/*
Route::get('blog/{id}', 'EntryController@show')->where('id', '[0-9]+')->name('blog.show');
Route::post('blog/{id}', 'EntryController@update')->where('id', '[0-9]+')->name('blog.update');
*/
