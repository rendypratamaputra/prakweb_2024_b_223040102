<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Rendy Pratama Putra']);
});

Route::get('/blog', function () {
    return view('blog', ['nama' => 'Rendy Pratama Putra']);
});

Route::get('/contact', function () {
    return view('contact', ['nama' => 'Rendy Pratama Putra']);
});
