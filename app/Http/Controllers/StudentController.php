<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::get(); //lấy toàn bộ dữ liệu từ bảng students
    
        //cú pháp view('file blade', $data)
        return view('students.index', compact('students'));
    }
}
