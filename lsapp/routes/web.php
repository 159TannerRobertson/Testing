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

Route::get('/', "PagesController@home");

Route::get('/services', "PagesController@services");

Route::get('/about', "PagesController@about");

Route::resource('posts', 'PostsController');

Route::get('/contact', function() {
    return view('pages.contact');
});

Route::get('/help', "PagesController@help");


// Route::get('/', function (){
//     return view('pages.welcome');
// });