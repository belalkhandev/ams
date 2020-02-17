@extends('layouts.master')

@section('content')

    <div class="tab-box">
        <div class="tab-box-header">
            <h3 class="tabl-box-header-title">Student Details</h3>
        </div>
        <div class="tab-box-body">
            <div class="tab-box-navigation">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Academic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Payments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#guardian" role="tab" aria-controls="contact" aria-selected="false">Guardian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="contact" aria-selected="false">Documents</a>
                    </li>
                </ul>
            </div>
            <div class="tab-box-content">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="tab-content-header">Personal Information</h3>
                        <div class="table-content-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="student-photo">
                                        <img src="" alt="student photo">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="student-information">
                                        <h3>{{ $student->name }}</h3>
                                        <p>Gender: {{ $student->gender }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="tab-content-header">Parents Information</h3>
                        <div class="table-content-body">
                            <table class="tab-table">
                                <tr>
                                    <th>Father's Name</th>
                                    <td>{{ $student->father_name }}</td>
                                    <td rowspan="3"><img src="" alt="father_photo"></td>
                                </tr>
                                <tr>
                                    <th>Father's Occupation</th>
                                    <td>{{ $student->father_occupation }}</td>
                                </tr>
                                <tr>
                                    <th>Father's Phone</th>
                                    <td>{{ $student->father_phone }}</td>
                                </tr>
                                <tr>
                                    <th>Mother's Name</th>
                                    <td>{{ $student->mother_name }}</td>
                                    <td rowspan="3"><img src="" alt="mother_photo"></td>
                                </tr>
                                <tr>
                                    <th>Mother's Occupation</th>
                                    <td>{{ $student->mother_occupation }}</td>
                                </tr>
                                <tr>
                                    <th>Mother's Phone</th>
                                    <td>{{ $student->mother_phone }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="tab-content-header">Guardian Information</h3>
                        <div class="table-content-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ratione ipsum nemo quaerat rerum! Suscipit maiores fugit vel dignissimos deserunt a, explicabo autem facere, voluptatum, vitae porro rem cum nihil quia optio voluptate tempore ea voluptatibus fugiat. Dolor nobis vero nostrum iusto et quis laboriosam quibusdam, illo provident fugiat reprehenderit doloribus facilis similique quas rerum minus molestias! Minus repellat harum, ab consectetur voluptatum saepe consequatur esse animi! Officia, quos quasi facere excepturi tempore, molestiae quidem dolorem mollitia voluptatem impedit, nesciunt dolore magni! Error corrupti sed et pariatur corporis alias accusamus natus quia hic vitae, doloribus iusto perspiciatis tempora nulla itaque!</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h3 class="tab-content-header">Academic Information</h3>
                            <div class="table-content-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ratione ipsum nemo quaerat rerum! Suscipit maiores fugit vel dignissimos deserunt a, explicabo autem facere, voluptatum, vitae porro rem cum nihil quia optio voluptate tempore ea voluptatibus fugiat. Dolor nobis vero nostrum iusto et quis laboriosam quibusdam, illo provident fugiat reprehenderit doloribus facilis similique quas rerum minus molestias! Minus repellat harum, ab consectetur voluptatum saepe consequatur esse animi! Officia, quos quasi facere excepturi tempore, molestiae quidem dolorem mollitia voluptatem impedit, nesciunt dolore magni! Error corrupti sed et pariatur corporis alias accusamus natus quia hic vitae, doloribus iusto perspiciatis tempora nulla itaque!</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-box-footer"></div>
    </div>

@endsection