<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Route::method('url', [ClassControllerMuonChay::class, 'tenFunctionMuonChay']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/students', [StudentController::class, 'index']);
