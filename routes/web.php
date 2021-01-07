<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/about', "about_usController@about");
Route::get('/services', "about_usController@services");
Route::get('/Why_Choose_Us', "about_usController@Why_Choose_Us");
Route::get('/FAQS', "about_usController@FAQS");
Route::get('/pricing', "about_usController@pricing");
Route::get('/Contact_Us', "about_usController@Contact_Us");
Route::get('/portfolio', "about_usController@portfolio");
Route::get('/dashbord', "about_usController@dashbord");
Route::get('/testimonials', "about_usController@testimonials");
Route::post('/Contact_Us', "about_usController@CreateForm") ->name('contact.store');