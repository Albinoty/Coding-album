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
    return view('index');
});


Route::get('/users','UserController@index')->name('users');
Route::get('/addUser','UserController@create')->name('addUser');
Route::post('/storeUser','UserController@store')->name('storeUser');
Route::get('/editUser/{id}','UserController@edit')->name('editUser');
Route::post('/updateUser/{id}','UserController@update')->name('updateUser');
Route::get('/deleteUser/{id}','UserController@destroy')->name('destroyUser');


Route::get('/albums','AlbumController@index')->name('albums');
Route::get('/albums/{id}','AlbumController@show')->name('showAlbum');
Route::get('/createAlbum','AlbumController@create')->name('createAlbum');
Route::post('/storeAlbum','AlbumController@store')->name('storeAlbum');