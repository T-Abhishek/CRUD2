<?php


Route::get('/', function () {
    return view('welcome');
});

Route::view('contact','contact');
Route::view('about','about');
Route::view('layout','layout');

// Route::get('customers','CustomerController@list');
Route::get('customers','CustomerController@index');
Route::post('customers','CustomerController@store');

Route::get('customers/create','CustomerController@create');
Route::get('customers/{customer}','CustomerController@show');

