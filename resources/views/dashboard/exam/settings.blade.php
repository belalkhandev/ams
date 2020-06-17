@extends('layouts.master')

@section('content')
    {{-- exam type --}}
    <div class="row">
        <div class="col-md-6">
            <div class="tab-box">
                <div class="tab-box-header">
                    <h3 class="tab-box-header-title">Mark Settings</h3>
                    <div class="tab-box-header-action">
                        @if($exam_mark)
                        <button class="btn btn-custom-gray" data-toggle="modal" data-target="#updateExamMark">Update Mark</button>
                        @else
                        <button class="btn btn-custom-gray" data-toggle="modal" data-target="#addExamMark">Add Mark</button>
                        @endif
                    </div>
                </div>
                <div class="tab-box-body text-center">
                    @if($exam_mark)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>One equal?</th>
                                    <th>Out of?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $exam_mark->name }}</td>
                                    <td>{{ $exam_mark->equal_one }}</td>
                                    <td>{{ number_format($exam_mark->out_of, 2) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="tab-box">
                <div class="tab-box-header">
                    <h3 class="tab-box-header-title">Exam Terms</h3>
                    <div class="tab-box-header-action">
                        <a href="{{ route('class-routine.create') }}" class="btn btn-custom-gray"> Add new</a>
                    </div>
                </div>
                <div class="tab-box-body">
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tab-box">
                <div class="tab-box-header">
                    <h3 class="tab-box-header-title">Grade  </h3>
                    <div class="tab-box-header-action">
                        <a href="{{ route('class-routine.create') }}" class="btn btn-custom-gray"> Add new</a>
                    </div>
                </div>
                <div class="tab-box-body">
                    
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.exam.modal')
    
    
@endsection