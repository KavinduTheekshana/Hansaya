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
    $activehome = "active";
    $activecourse = "";
    $activeabout = "";
    $activecontact = "";
    return view('welcome', [
        'activehome' => $activehome, 'activecourse' => $activecourse,
        'activeabout' => $activeabout, 'activecontact' => $activecontact
    ]);
});

Route::get('about', function () {
    $activehome = "";
    $activecourse = "";
    $activeabout = "active";
    $activecontact = "";
    return view('about', [
        'activehome' => $activehome, 'activecourse' => $activecourse,
        'activeabout' => $activeabout, 'activecontact' => $activecontact
    ]);
});

Route::get('contact', function () {
    $activehome = "";
    $activecourse = "";
    $activeabout = "";
    $activecontact = "active";
    return view('contact', [
        'activehome' => $activehome, 'activecourse' => $activecourse,
        'activeabout' => $activeabout, 'activecontact' => $activecontact
    ]);
});

Route::get('courses', function () {
    $activehome = "";
    $activecourse = "active";
    $activeabout = "";
    $activecontact = "";
    return view('courses', [
        'activehome' => $activehome, 'activecourse' => $activecourse,
        'activeabout' => $activeabout, 'activecontact' => $activecontact
    ]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('adminHome', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminHome')->middleware('is_admin');
Route::get('userHome', [App\Http\Controllers\HomeController::class, 'userHome'])->name('userHome')->middleware('is_user');


Route::get('edit_profile', [App\Http\Controllers\ProfileController::class, 'edit_profile'])->name('edit_profile');
Route::POST('changePassword', [App\Http\Controllers\ProfileController::class, 'changePassword'])->name('changePassword');
Route::POST('updateProfile', [App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('updateProfile');
Route::POST('updateprofilepicture', [App\Http\Controllers\ProfileController::class, 'updateprofilepicture'])->name('updateprofilepicture');

Route::get('users', [App\Http\Controllers\UserController::class, 'users'])->name('users')->middleware('is_admin');
Route::get('user_diactivate/{id}', [App\Http\Controllers\UserController::class, 'user_diactivate'])->middleware('is_admin');
Route::get('user_activate/{id}', [App\Http\Controllers\UserController::class, 'user_activate'])->middleware('is_admin');
Route::get('user_delete/{id}', [App\Http\Controllers\UserController::class, 'user_delete'])->middleware('is_admin');



// Create file upload form
Route::get('upload_file', [App\Http\Controllers\FileController::class, 'upload_file'])->name('upload_file')->middleware('is_admin');
Route::post('fileUpload', 'App\Http\Controllers\FileController@fileUpload')->name('fileUpload')->middleware('is_admin');
Route::get('manage_file', [App\Http\Controllers\FileController::class, 'manage_file'])->name('manage_file')->middleware('is_admin');
Route::get('file_delete/{id}', [App\Http\Controllers\FileController::class, 'file_delete'])->middleware('is_admin');

Route::get('manage_file_student_pdf', [App\Http\Controllers\FileController::class, 'manage_file_student_pdf'])->name('manage_file_student_pdf')->middleware('is_user');
Route::get('manage_file_student_word', [App\Http\Controllers\FileController::class, 'manage_file_student_word'])->name('manage_file_student_word')->middleware('is_user');



// Links 
Route::get('create_link', [App\Http\Controllers\LinkController::class, 'create_link'])->name('create_link')->middleware('is_admin');
Route::get('manage_links', [App\Http\Controllers\LinkController::class, 'manage_links'])->name('manage_links')->middleware('is_admin');
Route::POST('save_link', [App\Http\Controllers\LinkController::class, 'save_link'])->name('save_link')->middleware('is_admin');
Route::get('link_delete/{id}', [App\Http\Controllers\LinkController::class, 'link_delete'])->middleware('is_admin');

Route::get('manage_links_students', [App\Http\Controllers\LinkController::class, 'manage_links_students'])->name('manage_links_students')->middleware('is_user');



// contact 
Route::POST('contactform', 'App\Http\Controllers\ContactController@contactform');
