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
    return view('pages/home');
})->name('home');

Route::get('blog/{category?}', [ 'uses' => 'ManagementController@blog','as' => 'blog']);

Route::get('/add', function () {
    return view('post/add');
})->name('add');
//Route::get('add', [ 'uses' => 'ManagementController@add','as' => 'add']);
