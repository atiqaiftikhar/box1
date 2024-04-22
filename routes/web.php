<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GiftBoxController;
use App\Http\Controllers\SliceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[AdminController::class,'index']);
Route::post('/slices/store',[SliceController::class,'store']);

Route::get("/open",[GiftBoxController::class,'showOpen'])->name('box.open');
Route::get("/close",[GiftBoxController::class,'showClose'])->name('box.close');




