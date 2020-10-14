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

Route::get('/', function () {
    return redirect()->route('login');

});
Route::get('home','controlhome@home');
Route::post('upload','ImageControl@image')->name('upload');
Route::get('view','ImageControl@view')->name('view');
Route::get('uplode','ImageControl@up')->name('up');
Route::get('users','ImageControl@us')->name('users');

 Auth::routes();
Auth::routes(['register' => true]);
Route::get('/home', 'HomeController@index')->name('home');
