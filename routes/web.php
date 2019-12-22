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
    return view('welcome');
});

//travelia controller starts
Route::get('/home','TraveliaController@index');
Route::post('/home','TraveliaController@registration');
//travelia controller ends


//login controller starts
Route::post('/login','LoginController@index');
//login controller ends

//logout controller starts
Route::get('/logout','LogoutController@index');
//logout controller ends




//hotel part starts
Route::get('/hotel','HotelController@index');
Route::post('/hotel','HotelController@indexPost');
Route::get('/hotel/hotelProfile','HotelController@profile');
Route::post('/hotel/hotelProfile','HotelController@profilePost');
Route::get('/hotel/hotelAdd','HotelController@hotelAdd');
Route::post('/hotel/hotelAdd','HotelController@hotelAddPost');
Route::get('/hotel/hotelReq','HotelController@hotelReq');
Route::post('/hotel/hotelReq','HotelController@hotelReqPost');
//hotel part ends