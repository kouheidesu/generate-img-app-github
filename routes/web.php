<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return "hello world satou kyousuke!";
});

Route::get('/', function () {
    // 適当な画像URLを配列で渡す（例：storage/public/images/ 以下）
    $images = [
        asset('storage/images/sample1.jpg'),
        asset('storage/images/sample2.jpg'),
        asset('storage/images/sample3.jpg'),
    ];
    return view('gallery', compact('images'));
});
