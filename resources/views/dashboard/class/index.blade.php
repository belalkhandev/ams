@extends('layouts.master')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Class List</h3>
            <a href="{{ route('class.create') }}" class="btn btn-sm btn-primary float-right">Crate new</a>
        </div>
        <div class="box-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Numeric Name</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if($classes)
                        @foreach ($classes as $key => $class)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $class->name }}</td>
                                <td>{{ $class->numeric_name }}</td>
                                <td>{{ $class->status }}</td>
                                <td>
                                    <a href=""><i class="fas fa-edit"></i></a>
                                    <a href=""><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="box-footer"></div>
    </div>
@endsection