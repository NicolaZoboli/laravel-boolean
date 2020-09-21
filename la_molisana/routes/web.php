<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('paste', function () {

  $data = config('pasta.data', []);

  return view('paste', compact('data'));
});
