<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
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

Auth::routes();

Route::get('api/todo',[App\Http\Controllers\TodosController::class, 'list']);
Route::post('api/todo',[App\Http\Controllers\TodosController::class, 'saveTodo']);
Route::post('api/todo/done/{id}',[App\Http\Controllers\TodosController::class, 'markAsDone']);
Route::delete('api/todo/delete/{id}',[App\Http\Controllers\TodosController::class, 'deleteTodo']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
