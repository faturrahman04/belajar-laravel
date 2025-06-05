<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});

Route::get('/about', function () {
  $data = [
    "nama" => "Faturrahman Al farisi"
  ];
  return view('about', $data);
});

Route::get('/blog', function () {
  return view('blog');
});

Route::get('/contact', function () {
  return view('contact');
});
