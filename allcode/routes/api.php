<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//courses
Route::get('/courses/Aa123456',[\App\Http\Controllers\CoursesAPIController::class,'index']);
Route::get('/course/Aa123456/{id}',[\App\Http\Controllers\CoursesAPIController::class,'show']);

//users
Route::get('/users/Aa123456',[\App\Http\Controllers\UserAPIController::class,'index']);
Route::get('/user/Aa123456/{id}',[\App\Http\Controllers\UserAPIController::class,'show']);
Route::post('/user/create',[\App\Http\Controllers\UserAPIController::class,'store']);
