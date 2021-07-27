<?php

use App\Http\Controllers\AdminController;
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
Route::get('/users/form',[AdminController::class,'create']);
Route::post('/users/form',[AdminController::class,'store']);
Route::get('/users/list',[AdminController::class,'index']);
Route::get('/users/edit/{id}',[AdminController::class,'edit']); // hàm trả về form edit là edit ko phải update
Route::post('/users/edit/{id}',[AdminController::class,'update']); // hàm save của em là update ko phải save
Route::get('/users/destroy/{id}',[AdminController::class,'destroy']);
