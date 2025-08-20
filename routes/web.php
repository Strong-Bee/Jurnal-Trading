<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/Dashboard', function () {
    return view('admin/dashboard');
});
