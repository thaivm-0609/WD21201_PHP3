<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * Model Binding: khai báo $id nhận vào là 1 object khởi tạo từ class Student
     * tự động kiểm tra trong bảng students có bản ghi nào có id trùng với $id hay không
     * nếu có thì gán bản ghi thỏa mãn cho biến $id
     * nếu không thì đẩy về trang 404- Not found
     */
    //public function show(string $id) //không sử dụng model binding: phải tự truy vấn dữ liệu bằng tay
    public function show(Student $student) //sử dụng model binding
    {
        return view('students.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
