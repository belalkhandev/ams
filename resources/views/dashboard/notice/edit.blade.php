@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create New Notice</h3>
                    <a href="{{ route('notice.index') }}" class="btn btn-sm btn-secondary float-right">Notice List</a>
                </div>
                {!! Form::open(['route' => 'session.store', 'method' => 'POST']) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="">title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter notice title">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="">Notice Content</label>
                        <textarea name="notice_content" id="" placeholder="Enter Notice Content Here" class="form-control" rows="5"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Attached File</label>
                                <input type="file" name="notice_file">
                                <span class="text-danger">{{ $errors->first('file') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Publish Date</label>
                                <input type="text" name="publish_date" placeholder="Enter publish date" class="form-control">
                                <span class="text-danger">{{ $errors->first('publish_date') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Status</label>
                                {!! Form::select('status', getStatus(), null, ['placeholder' => 'Select Status', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="box-footer">
                    <button class="btn btn-sm btn-primary" onclick="submit_form(this, event)">Add Notice</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection