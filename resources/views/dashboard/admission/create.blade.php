@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">New Admission</h3>
                    <a href="{{ route('admission.index') }}" class="btn btn-sm btn-primary float-right">Admission List</a>
                </div>
                {!! Form::open() !!}
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-section">
                                <h3 class="form-section-title">Academic Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="has-sub-label">
                                    <div class="sub-label">
                                        Student ID 
                                    </div>
                                    <div class="sub-label text-right">
                                        <label class="round-checkbox-container">
                                            <input type="checkbox" name="student_id_checked" value="on_student_id" id="student_id_checked" class="round-checkbox-input">
                                            <div class="round-checkbox-text">
                                                Custom Student ID
                                            </div>
                                        </label>
                                    </div>
                                </label>
                                <input type="text" name="student_id" class="form-control"  id="studentID" placeholder="Enter student id" disabled>                                
                                <span class="text-danger">{{ $errors->first('student_id') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="has-sub-label">
                                    <div class="sub-label">Roll Number</div>
                                    <div class="sub-label text-right">
                                        <label class="round-checkbox-container">
                                            <input type="checkbox" name="student_roll_checked" value="on_student_roll" id="student_roll_checked" class="round-checkbox-input">
                                            <div class="round-checkbox-text">
                                                Custom Roll Number
                                            </div>
                                        </label>
                                    </div>
                                </label>
                                <input type="text" name="roll_number" class="form-control" id="studentRoll" placeholder="Enter roll number" disabled>                                
                                <span class="text-danger">{{ $errors->first('roll_number') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Admission Date</label>
                                <input type="text" name="admission_date" class="form-control datepicker" placeholder="DD-MM-YYYY">
                                <span class="text-danger">{{ $errors->first('admission_date') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">  
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Session</label>
                                {!! Form::select('session', makeDropdownList($sessions), null, ['placeholder' => 'Select Session', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('session') }}</span>
                            </div>
                        </div>                      
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Class</label>
                                {!! Form::select('class', makeDropdownList($classes), null, ['placeholder' => 'Select Class', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('class') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Group</label>
                                {!! Form::select('group', makeDropdownList($groups), null, ['placeholder' => 'Select Group', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('group') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Section</label>
                                {!! Form::select('group', makeDropdownList($sections), null, ['placeholder' => 'Select Group', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('group') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-section">
                                <h3 class="form-section-title">Personal Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Gender</label>
                                {!! Form::select('gender', getGenderType(), null, ['placeholder' => 'Select Gender', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Birthdate</label>
                                <input type="text" name="birthdate" class="form-control datepicker" placeholder="DD-MM-YYYY">
                                <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Category</label>
                                {!! Form::select('category', getStudentCategory(), null, ['placeholder' => 'Select category', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('category') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Religion</label>
                                {!! Form::select('religion', getReligionType(), null, ['placeholder' => 'Select Religion', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('religion') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Caste</label>
                                <input type="text" name="caste" class="form-control" placeholder="Enter caste">
                                <span class="text-danger">{{ $errors->first('caste') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Blood Group</label>
                                {!! Form::select('blood_group', getBloodGroups(), null, ['placeholder' => 'Select Blood Group', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('blood_group') }}</span>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Birth ID</label>
                                <input type="text" name="birth_id" class="form-control" placeholder="Enter birth id">
                                <span class="text-danger">{{ $errors->first('birth_id') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Student Photo</label>
                                <input type="file" name="student_photo">
                                <span class="text-danger">{{ $errors->first('student_photo') }}</span>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Father Name</label>
                                <input type="text" name="father_name" class="form-control" placeholder="Enter father name">
                                <span class="text-danger">{{ $errors->first('father_name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Father Phone</label>
                                <input type="text" name="father_phone" class="form-control" placeholder="Enter father phone">
                                <span class="text-danger">{{ $errors->first('father_phone') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Father Occupation</label>
                                <input type="text" name="father_occupation" class="form-control" placeholder="Enter father occupation">
                                <span class="text-danger">{{ $errors->first('father_occupation') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Father Photo</label>
                                <input type="file" name="father_photo">
                                <span class="text-danger">{{ $errors->first('father_photo') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Mother Name</label>
                                <input type="text" name="mother_name" class="form-control" placeholder="Enter mother name">
                                <span class="text-danger">{{ $errors->first('mother_name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Mother Phone</label>
                                <input type="text" name="mother_phone" class="form-control" placeholder="Enter mother phone">
                                <span class="text-danger">{{ $errors->first('mother_phone') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Mother Occupation</label>
                                <input type="text" name="mother_occupation" class="form-control" placeholder="Enter mother occupation">
                                <span class="text-danger">{{ $errors->first('mother_occupation') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Mother Photo</label>
                                <input type="file" name="mother_photo">
                                <span class="text-danger">{{ $errors->first('mother_photo') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Present Address</label>
                                <textarea name="present_address"  class="form-control" rows="3" placeholder="Enter Present Address"></textarea>
                                <span class="text-danger">{{ $errors->first('present_address') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="has-sub-label">
                                    <div class="sub-label">Permanent Address</div>
                                    <div class="sub-label text-right">
                                        <label class="round-checkbox-container">
                                            <input type="checkbox" name="same_as_present" value="same_as_present" id="same_as_present" class="round-checkbox-input">
                                            <div class="round-checkbox-text">
                                                Same as present address
                                            </div>
                                        </label>
                                    </div>
                                </label>
                                <textarea name="permanent_address"  class="form-control" rows="3" placeholder="Enter Permanent Address"></textarea>
                                <span class="text-danger">{{ $errors->first('permanent_address') }}</span>
                            </div>
                        </div>                        
                    </div>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-section">
                                <h3 class="form-section-title">Guardian Information</h3>                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="radio-box-group">
                                <div class="single-radio-box">
                                    <label class="radio-box-container">
                                        <input type="radio" name="guardian_type" class="input-radio-box" value="father">
                                        <span class="radio-box-wrap"></span>
                                        <span class="radio-box-content">Father</span>
                                    </label>
                                </div>
                                <div class="single-radio-box">
                                    <label class="radio-box-container">
                                        <input type="radio" name="guardian_type" class="input-radio-box" value="mother">
                                        <span class="radio-box-wrap"></span>
                                        <span class="radio-box-content">Mother</span>
                                    </label>
                                </div>
                                <div class="single-radio-box">
                                    <label class="radio-box-container">
                                        <input type="radio" name="guardian_type" class="input-radio-box" value="other" checked>
                                        <span class="radio-box-wrap"></span>
                                        <span class="radio-box-content">Other</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Guardian Name</label>
                                <input type="text" name="guardian_name" class="form-control" placeholder="Enter guardian name">
                                <span class="text-danger">{{ $errors->first('guardian_name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Guardian Phone</label>
                                <input type="text" name="guardian_phone" class="form-control" placeholder="Enter guardian phone">
                                <span class="text-danger">{{ $errors->first('guardian_phone') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Guardian Email</label>
                                <input type="text" name="guardian_email" class="form-control" placeholder="Enter guardian email">
                                <span class="text-danger">{{ $errors->first('guardian_email') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Guardian Photo</label>
                                <input type="file" name="guardian_photo">
                                <span class="text-danger">{{ $errors->first('guardian_photo') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Guardian Relation</label>
                                {!! Form::select('guardian_relation', getRelations(), null, ['placeholder' => 'Select Relation', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('guardian_relation') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Guardian Occupation</label>
                                <input type="text" name="guardian_occupation" class="form-control" placeholder="Enter guardian occupation">
                                <span class="text-danger">{{ $errors->first('guardian_occupationguardian_occupation') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Guardian Address</label>
                                <input type="text" name="guardian_address" class="form-control" placeholder="Enter guardian address">
                                <span class="text-danger">{{ $errors->first('guardian_address') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer text-right">
                    <button class="btn btn-sm btn-primary" onclick="submit_form(this, event)">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @push('header-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
@endpush

@push('footer-scripts')
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script>
    (function ($) {
        "use-strict"

        jQuery(document).ready(function () {

            //active datpicker
            if ($('.datepicker').length > 0) {
                $('.datepicker').datepicker({
                    todayHighlight: true,
                    format: 'dd-mm-yyyy'
                });
            }

            $(document).on('change', '#student_roll_checked', function() {
                if (this.checked === true) {
                    $('#studentRoll').closest('.form-control').attr('disabled', false);
                } else {
                    $('#studentRoll').closest('.form-control').attr('disabled', true).val('');
                }
            });

            $(document).on('change', '#student_id_checked', function() {
                if (this.checked === true) {
                    $('#studentID').closest('.form-control').attr('disabled', false);
                } else {
                    $('#studentID').closest('.form-control').attr('disabled', true).val('');
                }
            });
        });


    }(jQuery));
</script>
@endpush
@endsection