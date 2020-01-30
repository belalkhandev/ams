<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'School',
            'page_header' => 'School',
            'notices' => Notice::orderBy('publish_date', 'desc')
                                ->orderBy('id', 'desc')
                                ->whereDate('publish_date', '<=', Carbon::now())
                                ->get()
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
