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
});


Route::get('/opleidingen', function () {
    return view('opleidingen');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/review', function () {
    return view('review');
});


Route::get('/photo-gallery','PhotoGalleryController@listPhotos')->name('gallery.index');
Route::get('/photo-gallery/add-photo','PhotoGalleryController@showPhotoForm')->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo','PhotoGalleryController@savePhotoForm')->name('gallery.save_photo');



Route::get('/test', 'TestController@index');
Route::post('/store', "UserController@store");
Route::get('/logs', "UserController@logs");




