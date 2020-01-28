<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'School',
            'page_header' => 'School',
        ];

        return view('frontend.index')->with(array_merge($this->data, $data));
    }

    public function uncerConstruction()
    {
        $data = [
            'page_title' => 'Under Construction',
            'page_header' => 'Under Construction',
        ];

        return view('frontend.underconstruction')->with(array_merge($this->data, $data));
    }
}
