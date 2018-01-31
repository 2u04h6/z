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
Route::get('about', function () {
    return view('about');
});
Route::get('products', function () {
    return view('products');
});
Route::get('services', function () {
    return view('services');
});

Route::get('a', function () {
    return '1';
});
Route::get('z','ZZcontorller@index'); //路徑app/controllers
Route::post('z','ZZcontorller@update'); //路徑app/controllers

Route::get('v/{id?}', function () {  //加?為選用
    return '2';
})->where('id','[0-9]+'); //條件
Route::get('b/{name}', function () {
    return '3';
})->where('name','[A-z]+');
Route::get('b/{id}/{name}', function () {
    return '4';
})->where(['id','[0-9]+','name','[A-z]+']);

Route::get('q/{id}', function () {
    return 'qqqq';
})->name('q.show');
