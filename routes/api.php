<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\StudentController;





Route::resources([
    "news"=>"NewsController"
]);

Route::resources([
    "meeting"=>"MeetingController"
]);

Route::resources([
    "student"=>"StudentController"
]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

