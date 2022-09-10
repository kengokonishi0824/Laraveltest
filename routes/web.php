<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController1;
use App\Http\Controllers\TestController2;

Route::get('/building', [TestController1::class, 'index']);
Route::get('/building/{room?}', [TestController2::class, 'index']);
