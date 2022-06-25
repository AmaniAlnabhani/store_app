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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['prefix'=>'administrator/','middelware'=>['role:administrator']],function(){
 Route::get('dashboard','AdminController@dashboard')->name('adminDashboard');
});
Route::group(['prefix'=>'customer/','middelware'=>['role:customer']],function(){
    Route::get('dashboard','CustomerController@dashboard')->name('customerDashboard');

});