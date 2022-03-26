<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourcesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleCourseController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UserAPIController;
use App\Http\Controllers\UserController;
use App\Models\Tickets;
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
Route::get('/About', function () {
    return view('frontend.AboutUs');
});
Route::get('/userProfile', function () {
    $tickets = Tickets::with('course', 'user')->where('user_id', auth()->user()->id)->get();
    return view('frontend.profile', compact('tickets'));
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware(['adminAuth', 'auth']);
Route::resource('/course', CourcesController::class)->middleware(['adminAuth', 'auth']);
Route::resource('/user', UserController::class)->middleware(['adminAuth', 'auth']);
Route::resource('/userUpdate', UserAPIController::class)->middleware('auth');
Route::resource('/admin', AdminController::class)->middleware(['adminAuth', 'auth']);
Route::resource('/singleCourse', SingleCourseController::class);
Route::resource('/ticket', TicketsController::class)->middleware('auth');

Route::get('/filter/{num}', [TicketsController::class, 'filterTickets'])->name('filterTickets');
Route::get('/update/{num}', [TicketsController::class, 'update'])->name('updateTickets');
