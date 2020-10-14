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
Route::delete('/img/{id}', 'ImageControl@destroy')->name('destroy')->middleware('auth');    //to delete img from database
Route::delete('delete/{id}', 'ImageControl@destroyuser')->name('destroyuser')->middleware('auth');    //to delete img from database
Route::get('edit-user/{id}','ImageControl@edit')->name('edit-user');
Route::patch('edit-user/{id}','ImageControl@update_user')->name('update_user');

Route::get('edit-img/{id}','ImageControl@edit_img')->name('edit_img');
Route::patch('update-img/{id}','ImageControl@update_img')->name('update_img');


 Auth::routes();
Auth::routes(['register' => true]);
Route::get('/home', 'HomeController@index')->name('home');
