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
    return view('welcome');
});


Route::get('/gambar', function (){
    return view('image');
});


Route::get('/hello', function () {
    return view('hello world');
});

Route::get('/belajar', function () {
    echo '<h1> Hello World </h1>';
    echo '<p> Sedang belajar laravel (wati darmawan)</p>';
});


Route::get('page/{nomor}', function($nomor){
    return'ini halaman ke-' . $nomor;
});

Route::resource('user', 'DetailProfileController');

/*Route::get("/home", function(){
    return view("homepage");
});*/

//Route::get('user', ManagementUserController@index');
Route::resource('user', 'ManagementUserController');

Route::resource('user', 'ManagementUserController');

Route::group(['namespace'=> 'Fronted'], function(){
    Route::resource('home', 'HomeController');
});
Route::group(['namespace'=> 'Backend'], function() {
    Route::resource('dashboard', 'DashboardController');
});