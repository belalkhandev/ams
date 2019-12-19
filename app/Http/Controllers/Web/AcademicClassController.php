<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\AcademicClassStoreFormRequest;
use App\Models\AcademicClass;
use Illuminate\Http\Request;

class AcademicClassController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Acadmic Class',
            'page_header' => 'Class List',
            'classes' => AcademicClass::get(),
        ];

        return view('dashboard.class.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Create Acadmic Class',
            'page_header' => 'Create Class'
        ];

        return view('dashboard.class.create')->with(array_merge($this->data, $data));
    }

    public function store(AcademicClassStoreFormRequest $request)
    {
        $class = new AcademicClass();
        $class->name = $request->get('name');
        $class->numeric_name = $request->get('numeric_name');
        $class->status = $request->get('status');
        
        if ($class->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Success!',
                'message' => 'Class Created Successfully'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed!',
            'message' => 'Failed to Create Class'
        ]);
    }

    public function edit()
    {
        $data = [
            'page_title' => 'Update Acadmic Class',
            'page_header' => 'Update Class'
        ];

        return view('dashboard.class.edit')->with(array_merge($this->data, $data));
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
