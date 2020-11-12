<?php

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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('courses', function () {
    return view('courses');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('adminHome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');
Route::get('edit_profile', [App\Http\Controllers\ProfileController::class, 'edit_profile'])->name('edit_profile')->middleware('is_admin');
// Route::post('changePassword', 'App\Http\Controllers\ProfileController@changePassword')->name('changePassword')->middleware('is_admin');
Route::POST('changePassword', [App\Http\Controllers\ProfileController::class, 'changePassword'])->name('changePassword')->middleware('is_admin');
Route::POST('updateProfile', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('updateProfile')->middleware('is_admin');
Route::POST('updateprofilepicture', [App\Http\Controllers\ProfileController::class, 'updateprofilepicture'])->name('updateprofilepicture')->middleware('is_admin');
