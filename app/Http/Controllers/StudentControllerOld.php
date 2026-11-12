<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        /**
         * where('ten_column', value): tìm bản ghi có giá trị column = value;
         * where('ten_column', 'phép so sánh', value): tìm bản có 
         *      giá trị thỏa mãn đk so sánh ('<', '>', '>=', '<=', '<>' - khác)
         * orWhere(): bản ghi thỏa mãn 1 trong 2 điều kiện thì sẽ được trả về
         * orderBy('ten_column', asc/desc): sắp xếp bản ghi theo trình tự tăng (asc)/giảm (desc) của cột column
         * limit(x): giới hạn x bản ghi trả về
         * get(): lấy toàn bộ bản ghi thỏa mãn câu truy vấn trong bảng
         * count(): đếm số bản ghi 
         * paginate(x): phân trang dữ liệu trả về, mỗi trang có x phần tử
         */

        $students = Student::get(); //lấy toàn bộ dữ liệu từ bảng students
        
        //cú pháp view('file blade', $data)
        return view('students.index', compact('students'));
    }
}
