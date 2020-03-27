@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Subject List</h3>
                    <a href="{{ route('subject.create') }}" class="btn btn-sm btn-primary float-right">Crate new</a>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Class</th>
                                <th>Group</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($subjects)
                                @foreach ($subjects as $key => $subject)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $subject->academicClass->name }}</td>
                                        <td>{{ $subject->group? $subject->group->name : "" }}</td>
                                        <td>{{ $subject->name }}</td>
                                        <td>{{ $subject->code }}</td>
                                        <td>{!! styleStatus($subject->status) !!}</td>
                                        <td class="inline-element">
                                            <a href="{{ route('subject.edit', $subject->id) }}" data-toggle="tooltip" title="Delete" data-placement="top" class="custom-btn-sm btn btn-primary"><i class="fas fa-edit"></i></a>
                                            {!! Form::open(['route' => ['subject.destroy', $subject->id], 'method' => 'DELETE', 'class'=>'inline-el']) !!}
                                            <button type="submit" class="btn btn-danger custom-btn-sm" onclick="deleteSwal(this, event)" data-toggle="tooltip" title="Delete" data-placement="top">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="box-footer"></div>
            </div>
        </div>
    </div>
@endsection