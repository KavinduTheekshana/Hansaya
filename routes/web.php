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

Route::get('users', [App\Http\Controllers\UserController::class, 'users'])->name('users')->middleware('is_admin');
Route::get('user_diactivate/{id}', [App\Http\Controllers\UserController::class, 'user_diactivate'])->middleware('is_admin');
Route::get('user_activate/{id}', [App\Http\Controllers\UserController::class, 'user_activate'])->middleware('is_admin');
Route::get('user_delete/{id}', [App\Http\Controllers\UserController::class, 'user_delete'])->middleware('is_admin');



// Create file upload form
Route::get('upload_file', [App\Http\Controllers\FileController::class, 'upload_file'])->name('upload_file')->middleware('is_admin');
Route::post('fileUpload', 'App\Http\Controllers\FileController@fileUpload')->name('fileUpload')->middleware('is_admin');
Route::get('manage_file', [App\Http\Controllers\FileController::class, 'manage_file'])->name('manage_file')->middleware('is_admin');

// Links 
Route::get('create_link', [App\Http\Controllers\LinkController::class, 'create_link'])->name('create_link')->middleware('is_admin');
Route::get('manage_links', [App\Http\Controllers\LinkController::class, 'manage_links'])->name('manage_links')->middleware('is_admin');
Route::POST('save_link', [App\Http\Controllers\LinkController::class, 'save_link'])->name('save_link')->middleware('is_admin');
Route::get('link_delete/{id}', [App\Http\Controllers\LinkController::class, 'link_delete'])->middleware('is_admin');