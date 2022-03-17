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

Route::get('/', 'Home@indexToIndex');
Route::post('/postStudent', "StudentController@store")->name('student.store');
// Route::get('/allnews', "NewsController@indexToIndex");
//  Route::get('/allnews',"MeetingController@indexToIndex");
