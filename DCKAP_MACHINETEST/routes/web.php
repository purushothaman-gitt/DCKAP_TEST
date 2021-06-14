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
Route::get('/','CategoryController@index'); 
Route::post('/category/create','CategoryController@createcategory'); 
Route::get('/category/details/{id}','TaskcategoryController@view');
Route::post('/category/subtasks/delete','TaskcategoryController@delete');
Route::post('/testcases/store','TaskcategoryController@savetestcases'); 
