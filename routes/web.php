<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;


Route::view("/", "index");
Route::resource('custom', CustomController::class);

