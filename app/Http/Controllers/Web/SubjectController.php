<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubjectStoreFormRequest;
use App\Models\AcademicClass;
use App\Models\Group;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Subject List',
            'page_header' => 'Subject List',
            'subjects' => Subject::get()
        ];

        return view('dashboard.subject.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Subject Create',
            'page_header' => 'Subject Create',
            'classes' => AcademicClass::get(),
            'groups' => Group::get(),
        ];

        return view('dashboard.subject.create')->with(array_merge($this->data, $data));
    }

    public function store(SubjectStoreFormRequest $request)
    {
        $subject = new Subject();
        $subject->academic_class_id = $request->get('class');   
        $subject->group_id = $request->get('group');   
        $subject->name = $request->get('name');   
        $subject->code = $request->get('code');   
        $subject->status = $request->get('status');
        
        if ($subject->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Success!',
                'message' => 'Successfully Store Subject'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed!',
            'message' => 'Failed to Store Subject'
        ]);
    }
}
