<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/building/{room?}', function($text = '建物') {
    return $text . 'です';
});