@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">update Session</h3>
                    <a href="{{ route('class.index') }}" class="btn btn-sm btn-secondary float-right">Class List</a>
                </div>
                {!! Form::open(['route' => ['session.update', $session->id], 'method' => 'PUT']) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $session->name }}" placeholder="Enter Session name">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        {!! Form::select('status', getStatus(), $session->status, ['placeholder' => 'Select Status', 'class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button class="btn btn-sm btn-primary" onclick="submit_form(this, event)">Update</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection