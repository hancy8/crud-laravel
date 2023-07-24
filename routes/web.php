<?php

use App\Http\Controllers\HomepageController;
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
Route::get('/index',[HomepageController::class,'view']);
Route::post('/index',[HomepageController::class,'store']);
Route::get('/show',[HomepageController::class,'show']);
Route::get('/show',[HomepageController::class,'show']);
Route::get('/data',[HomepageController::class,'array']);
Route::get('/forms/update/{forms_id}',[HomepageController::class,'edit']);
Route::get('/edit_form',[HomepageController::class,'update']);
Route::get('/forms/delete/{id}',[HomepageController::class,'destroy']);