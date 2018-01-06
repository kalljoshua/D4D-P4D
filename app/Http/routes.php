<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/P4D-Data_form','P4DDataController@p4d_dataForm')->name('P4DForm');
Route::post('/P4D-Data_form','P4DDataController@p4d_dataSubmit')->name('P4DForm.submit');
Route::get('/P4D-Data','P4DDataController@p4ddata')->name('all.p4d');

Route::post('/indicator_form','VariablesController@indicatorSubmit')->name('indicator.submit');
Route::post('/sub-indicator_form','VariablesController@subIndicatorSubmit')->name('sub-indicator.submit');
Route::post('/policy_form','VariablesController@policySubmit')->name('policy.submit');

Route::get('/D4D-Data_form','D4DDataController@d4d_dataForm')->name('D4DForm');
Route::post('/D4D-Data_form','D4DDataController@d4d_dataSubmit')->name('D4DForm.submit');
Route::get('/D4D-Data','D4DDataController@d4ddata')->name('all.d4d');
