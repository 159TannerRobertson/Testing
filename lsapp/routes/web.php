<?php

Route::get('/', "PagesController@loginhome");

Route::get('/services', "PagesController@services");

Route::get('/pickcampain', "PagesController@pickcampain");

Route::get('/contact', "PagesController@contact");

Route::get('/character', "PagesController@character");

Route::get('/createuser', "PagesController@createuser");

Route::resource('player', 'PlayerController');

Route::resource('master', 'MasterController');

