<?php

use Illuminate\Support\Facades\Route;

Route::get('posts', function () {
    return "Danh sách bafi post";
});

Route::get('/hehe', function () {
    return view('products');
});
