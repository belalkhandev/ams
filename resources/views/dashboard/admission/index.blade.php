@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Admission list</h3>
                    <a href="{{ route('admission.create') }}" class="btn btn-sm btn-primary float-right">New Admission</a>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Group</th>
                                <th>Section</th>
                                <th>Session</th>
                                <th></th>
                            </tr>
                        </thead>
                        @if($admissions)
                        <tbody>
                            @foreach ($admissions as $key => $admission)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>
                <div class="box-footer"></div>
            </div>
        </div>
    </div>
@endsection