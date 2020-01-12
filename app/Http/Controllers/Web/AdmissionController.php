<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;

class AdmissionController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Acadmic Class',
            'page_header' => 'Class List',
            'admissions' => Admission::get(),
        ];
    
        return view('dashboard.admission.index')->with(array_merge($this->data, $data));
    }
}
