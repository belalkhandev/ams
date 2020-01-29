<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticeStoreFormRequest;
use App\Models\Notice;
use App\Services\Utility;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Notice',
            'page_header' => 'Notice List',
            'notices' => Notice::paginate(20),
        ];

        return view('dashboard.notice.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Create Notice',
            'page_header' => 'Create Notice'
        ];

        return view('dashboard.notice.create')->with(array_merge($this->data, $data));
    }

    public function store(NoticeStoreFormRequest $request)
    {
        $path = null;

        if ($request->hasFile('notice_file')) {
            $path = Utility::file_upload($request, 'notice_file', 'notices');
        }

        $notice = new Notice();
        $notice->title = $request->get('title');
        $notice->content = $request->get('content');
        $notice->attached_file = $path;
        $notice->publish_date = database_formatted_date($request->get('publish_date'));
        $notice->status = $request->get('status');

        if ($notice->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Success!',
                'message' => 'Notice Stored Successfully'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed!',
            'message' => 'Failed to Store Notice'
        ]);
    }

    public function edit(Session $session, $id)
    {
        $data = [
            'page_title' => 'Update Session',
            'page_header' => 'Update Session',
            'Session' => $session->findOrFail($id)
        ];

        return view('dashboard.Session.edit')->with(array_merge($this->data, $data));
    }

    public function update(SessionUpdateFormRequest $request, $id)
    {
        $session = Session::findOrFail($id);
        $session->name = $request->get('name');
        $session->status = $request->get('status');

        if ($session->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Updated!',
                'message' => 'Session Updated Successfully'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed!',
            'message' => 'Failed to Update Session'
        ]);
    }

    public function destroy(Session $session, $id)
    {
        $session = $session->findOrFail($id);

        if ($session->delete()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Success!',
                'message' => 'Session Deleted Successfully'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed!',
            'message' => 'Failed to Delete Session'
        ]);
    }
}
