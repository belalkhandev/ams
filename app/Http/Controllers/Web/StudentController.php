<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Student',
            'page_header' => 'Students List',
            'students' => Student::latest()->get(),
        ];

        return view('dashboard.student.index')->with(array_merge($this->data, $data));
    }
}
