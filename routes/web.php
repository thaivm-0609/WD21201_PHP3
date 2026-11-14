<?php

use App\Http\Controllers\StudentController;
use App\Http\Middleware\CheckAuth;
use Illuminate\Support\Facades\Route;

//Auth::loginUsingId(2); //truy cập hệ thống thông qua tài khoản có id là X
//Route::get('/test-auth', function () {
//    dd(auth());
//});

//Route::method('url', [ClassControllerMuonChay::class, 'tenFunctionMuonChay']);
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/students', [StudentController::class, 'index']); //hiển thị danh sách sinh viên
// Route::get('/students/{id}', [StudentController::class, 'show']);//hiển thị thông tin chi tiết sinh viên
// Route::get('/students/create', [StudentController::class, 'create']);
//khai báo route cho resource controller: tự động map url với các hàm trong controller

Route::resource('/students', StudentController::class); 
/** 
 * Route::method('/url', TenInvokeController::class); khai báo route cho controller đơn (invokable)
 * Route::match(['get', 'put'], 'url', $callback); có thể dùng method get hoặc put đều được
 * Route::any('url', $callback); có thể dùng bất cứ method nào cũng được
 * Route::redirect('url_hien_tai', 'url_dich'); điều hướng người dùng sang 1 url khác
 * Route::view('url', 'view'); trả thẳng view không cần thông qua controller (thường áp dụng với trang tĩnh)
 * 
 */

/**
 * Route::get()->middleware('ten_middleware'); chỉ định middleware cho 1 route duy nhất
 * Route::middleware('ten_middleware')->prefix('tien_to_url')->group(function () { 
 *      Route::get();
 *      Route::post();
 * })
 */
Route::prefix('admin')->middleware(CheckAuth::class)->group(function () { //prefix khai báo tiền tố url dùng chung
    Route::view('dashboard', 'dashboard'); //muốn truy cập phải qua đường dẫn /admin/dashboard
});

