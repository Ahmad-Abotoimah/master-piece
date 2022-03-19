<?php

use App\Http\Controllers\CourcesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleCourseController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.landing');
});
Route::get('/courseDetails', function () {
    return view('frontend.courseDetails');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('/course', CourcesController::class)->middleware(['adminAuth','auth']);
Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('/singleCourse', SingleCourseController::class)->middleware('auth');
Route::resource('/ticket', TicketsController::class)->middleware('auth');

