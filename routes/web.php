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
route::view('home','home');
Route::get('home', function () {
    return view('home');
});
Route::get('contact', function () {
    return view('contact');
});
route::view('about','about');


Route::get('customer', 'CustomersController@index');
Route::get('customers/create', 'CustomersController@index');
Route::post('customer', 'CustomersController@store');
