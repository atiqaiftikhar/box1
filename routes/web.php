<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GiftBoxController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[AdminController::class,'index']);
Route::get("/open",[GiftBoxController::class,'showOpen'])->name('box.open');
Route::get("/close",[GiftBoxController::class,'showClose'])->name('box.close');




