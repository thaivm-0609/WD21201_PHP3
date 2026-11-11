<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Mặc định model Student sẽ lấy dữ liệu từ bảng students
     * Nếu không, dùng $table chỉ định bảng sẽ được truy vấn
     * protected $table = 'hoc_sinh'; 
    */
    
    /**
     * Khai báo $fillable=[] các trường dữ liệu có thể chỉnh sửa qua form
     * bắt buộc phải khai báo 
     * nếu không sẽ không lấy được trường đấy từ form và lưu vào db
     */
    protected $fillable = [
        'name',
        'code',
        'email',
        'phone',
        'dob',
        'address',
        'gender',
    ];

    /**
     * Khai báo mối quan hệ giữa các models (relation);
     */
}
