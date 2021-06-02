<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;

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

Route::group(['namespace' => 'Frontend'], function() {
    Route::get('home',[HomeController::class, 'index']);
});
Route::group(['namespace' => 'Backend'], function() {
    Route::get('dashboard',[DashboardController::class, 'index']);
});

Route::resource('home', HomeController::class);

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['web' , 'auth'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('pendidikan', PendidikanController::class);
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['namespace'=> 'Frontend'], function()
{
    Route::get('/','Homecontroller@index');
    Route::resource('home', 'Homecontroller');
});

Route::group(['middlware'=> ['web','auth']], function(){
    Route::group(['namespace'=>'Backend'], function()
    {
        Route::resource('dashboard', 'DashboardController');
        Route::resource('pendidikan', 'PendidikanController');
    });
});
