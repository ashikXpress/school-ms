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

use Illuminate\Support\Facades\Route;


Route::namespace('Dashboard')->group(function (){
    Route::get('dashboard','DashboardController@dashboard');
});

Route::namespace('Auth')->group(function (){

});
Route::namespace('Admin')->group(function (){

});
Route::namespace('Teacher')->group(function (){

});
Route::namespace('Student')->group(function (){

});
Route::namespace('Staff')->group(function (){

});
Route::namespace('Guardian')->group(function (){

});
Route::namespace('Management')->group(function (){

});
