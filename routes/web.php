<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/durian-barbar', function () {
    return view('durian-barbar');
});