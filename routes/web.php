<?php

Route::get('/join', 'JoinController@create')->name('join');
Route::post('/join', 'JoinController@store')->name('join');