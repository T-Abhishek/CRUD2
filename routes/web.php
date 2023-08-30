<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');
Route::view('about','about')->name('about');;

// Route::view('contact','contact');
// Route::view('about','about')->middleware('test');

// Route::view('layout','layout');

// Route::get('customers','CustomerController@list');

// Route::get('customers','CustomerController@index');
// Route::get('customers/create','CustomerController@create');
// Route::post('customers','CustomerController@store');
// Route::get('customers/{customer}','CustomerController@show');
// Route::get('customers/{customer}/edit','CustomerController@edit');
// Route::patch('customers/{customer}','CustomerController@update');
// Route::delete('customers/{customer}','CustomerController@destroy');


Route::resource('customers','CustomerController');


Auth::routes();

Route::get('/home', 'HomeController@index');
