<?php


Route::get('/', function () {
    return view('welcome');
});

Route::view('contact','contact');
Route::view('about','about');
Route::view('layout','layout');

Route::get('customers','CustomerController@list');
Route::post('customers','CustomerController@store');