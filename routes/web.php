<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('course/index', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
Route::get('course/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
Route::delete('course/delete',[CourseController::class, 'delete'] )->name('course.delete');
