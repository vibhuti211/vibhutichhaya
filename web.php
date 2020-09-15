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
    return view('register');
});
Route::get('/test/login', function () {
    return view('login');
});

Route::get('/test/addproduct', function () {
    return view('addproduct');
});

Route::post('registeration','registercontroller@register');
Route::post('/test/dologin','registercontroller@dologin');

Route::post('test/addproducts','productcontroller@addproduct');
Route::get('/test/productshow','productcontroller@disproduct');
Route::post('/test/updateproductss/{id}','productcontroller@update');
Route::get('/test/updateproducts/{id}','productcontroller@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
