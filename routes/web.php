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
//frontend

Route::get('/','Controller@index');
Route::get('/hotel','Controller@show_hotel');
Route::get('/Room-rate','Controller@show_room_rate');
Route::get('/Special-Offers','Controller@show_offer');
Route::get('/Location','Controller@show_location');
Route::get('/Book-Now','Controller@show_book_now');
Route::get('/room-detail','Controller@show_room_detail');


//admin

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@Show_dashboard');
Route::get('/backend-dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');


//backend

//CategoryRoom
Route::get('/add-category-room','CategoryRoom@add_category_room');
Route::post('/save-category-room','CategoryRoom@save_category_room');
Route::get('/all-category-room','CategoryRoom@all_category_room');
Route::get('/showroom/{category_id}','CategoryRoom@showroom');
Route::get('/hideroom/{category_id}','CategoryRoom@hideroom');
Route::get('/delete/{category_id}','CategoryRoom@del_category_room');
Route::get('/edit/{category_id}','CategoryRoom@edit_category_room');
Route::get('/update-category-room/{category_id}','CategoryRoom@update_category_room');









;
