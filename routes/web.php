<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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



Route::get("/", "App\Http\Controllers\TaskController@index");
Route::post("/task", "App\Http\Controllers\TaskController@store");
Route::get("/{id}/complete", "App\Http\Controllers\TaskController@complete");
Route::get("/{id}/delete", "App\Http\Controllers\TaskController@destroy");

