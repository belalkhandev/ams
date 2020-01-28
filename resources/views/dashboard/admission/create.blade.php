@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">New Admission</h3>
                    <a href="{{ route('admission.index') }}" class="btn btn-sm btn-primary float-right">Admission List</a>
                </div>
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
                                <label for="">Student ID </label>
                                {!! Form::select('session', makeDropdownList($sessions), null, ['placeholder' => 'Select Session', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('session') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Roll Number</label>
                                {!! Form::select('class', makeDropdownList($classes), null, ['placeholder' => 'Select Class', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('class') }}</span>
                            </div>
                        </div>                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Session</label>
                                {!! Form::select('session', makeDropdownList($sessions), null, ['placeholder' => 'Select Session', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('session') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Class</label>
                                {!! Form::select('class', makeDropdownList($classes), null, ['placeholder' => 'Select Class', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('class') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Group</label>
                                {!! Form::select('group', makeDropdownList($groups), null, ['placeholder' => 'Select Group', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('group') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
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
                                <input type="text" name="birthdate" class="form-control" placeholder="DD/MM/YYYY">
                                <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Religion</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Caste</label>
                                {!! Form::select('gender', getGenderType(), null, ['placeholder' => 'Select Gender', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Blood Group</label>
                                {!! Form::select('session', makeDropdownList($sessions), null, ['placeholder' => 'Select Session', 'class' => 'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Birth ID</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Student Photo</label>
                                <input type="file" name="father_photo">
                                <span class="text-danger">{{ $errors->first('father_photo') }}</span>
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
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Permanent Address</label>
                                <textarea name="permanent_address"  class="form-control" rows="3" placeholder="Enter Permanent Address"></textarea>
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
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
                                        <input type="radio" name="guardian_type" class="input-radio-box" value="other">
                                        <span class="radio-box-wrap"></span>
                                        <span class="radio-box-content">Other</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Guardian Name</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Guardian Phone</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Guardian Email</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer"></div>
            </div>
        </div>
    </div>
@endsection