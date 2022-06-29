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
/*Route::group(['prefix'=>'administrator/','middelware'=>['role:administrator']],function(){
 Route::get('dashboard','AdminController@dashboard')->name('adminDashboard');
});
Route::group(['prefix'=>'customer/','middelware'=>['role:customer']],function(){
    Route::get('dashboard','CustomerController@dashboard')->name('customerDashboard');

});
Route::get('addadmin', function () {
    return view('/admin/addadmin');
  });*/
Route::get('proudects','ProudectsController@index');
Route::get('proudects/create','ProudectsController@create');
Route::get('proudects/edit{id}','ProudectsController@edit');
Route::get('proudects/delete{id}','ProudectsController@destroy');
Route::post('proudects/update{id}','ProudectsController@update');

Route::post('/proudects/store','ProudectsController@store');
Route::post('/section/store','sectionController@store');
Route::post('/order/import','OrderController@importFromExcel');
Route::view('order-form','excel-import');
Route::get('order','OrderController@export');
