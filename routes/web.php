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
Route::view('/','home')->name('home');
Route::view('/about','about');
Route::view('/serch','serch');
Route::view('/singel','singel');
Route::view('/blog','blog');
Route::view('/contact','contact');
Route::view('/pro1','pro1');
Route::view('/pro2','pro2');
Route::view('/pro3','pro3');
Route::view('/pro4','pro4');
Route::view('/pro5','pro5');
Route::view('/pro6','pro6');
Route::post('/search','SearchController@search');
