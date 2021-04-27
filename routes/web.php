<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::resource('students','App\Http\Controllers\StudentsController');

Route::get('/add-info', [StudentsController::class,'create'])->name('add.info');
Route::post('/add-info', [StudentsController::class,'store'])->name('save.info');
Route::get('/student-list', [StudentsController::class,'show'])->name('info.list');
Route::get('/edit-info/{id}', [StudentsController::class,'edit'])->name('edit.info');
Route::get('/delete-info/{id}', [StudentsController::class,'destroy'])->name('delete.info');
Route::post('/update-info', [StudentsController::class,'update'])->name('update.info');





