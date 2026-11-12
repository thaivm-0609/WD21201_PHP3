<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//Route::method('url', [ClassControllerMuonChay::class, 'tenFunctionMuonChay']);
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/students', [StudentController::class, 'index']); //hiển thị danh sách sinh viên
// Route::get('/students/{id}', [StudentController::class, 'show']);//hiển thị thông tin chi tiết sinh viên
// Route::get('/students/create', [StudentController::class, 'create']);
//khai báo route cho resource controller: tự động map url với các hàm trong controller

Route::resource('/students', StudentController::class); 
/** khai báo route cho controller đơn (invokable)
 * Route::method('/url', TenInvokeController::class);
 */