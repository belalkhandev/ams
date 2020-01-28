<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AcademicClass;
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\Group;
use App\Models\Section;
use App\Models\Session;

class AdmissionController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Acadmic Class',
            'page_header' => 'Admission List',
            'admissions' => Admission::get(),
        ];
    
        return view('dashboard.admission.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Acadmic Class',
            'page_header' => 'Admission List',
            'sessions' => Session::get(),
            'classes' => AcademicClass::get(),
            'groups' => Group::get(),
            'sections' => Section::get(),
        ];
    
        return view('dashboard.admission.create')->with(array_merge($this->data, $data));
    }
}
