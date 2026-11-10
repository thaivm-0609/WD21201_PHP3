<?php

use Illuminate\Support\Facades\Route;

//Route::method('url', [Controller::class, 'tenFunction']);
Route::get('/', function () {
    return view('welcome');
});
