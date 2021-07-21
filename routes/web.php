<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('roles');
Route::get('teacher/home', [HomeController::class, 'teacherHome'])->name('teacher.home')->middleware('roles');
Route::get('parent/home', [HomeController::class, 'parentHome'])->name('parent.home')->middleware('roles');
Route::get('principal/home', [HomeController::class, 'principalHome'])->name('principal.home')->middleware('roles');
Route::get('home', [HomeController::class, 'index'])->name('home');
