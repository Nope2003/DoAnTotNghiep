<?php

use Illuminate\Support\Facades\Route;

Route::get('/trangchu', function () {
    return view('user/trangchu');
});

Route::get('/sanpham', function () {
    return view('user/sanpham');
});

Route::get('/product', function () {
    return view('user/product');
});