@extends('layouts.admin.app')
@section('title', 'Edit Employee')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <form action="{{ url('admin/department/'.$employee->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h4 class="card-title">Personal Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="first_name"
                                        value="{{ $employee->first_name }}">
                                    @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="last_name"
                                        value="{{ $employee->last_name }}">
                                    @error('last_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="full_name"
                                        value="{{ $employee->full_name }}">
                                    @error('full_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $employee->email }}">
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="date" class="form-control" name="birthday"
                                        value="{{ $employee->birthday }}">
                                    @error('birthday')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="display-block">Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male"
                                            value="0">
                                        <label class="form-check-label" for="gender_male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female"
                                            value="1">
                                        <label class="form-check-label" for="gender_female">Female</label>
                                    </div>
                                    @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visa Type</label>
                                    <select class="select" name="visa_type">
                                        <option>Select</option>
                                        <option value="1">Visit Visa</option>
                                        <option value="2">Cancel Visa</option>
                                        <option value="3">Own Visa</option>
                                        <option value="4">Freelance Visa</option>
                                    </select>
                                    @error('visa_type')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Visa Expire Date</label>
                                    <input type="date" class="form-control" name="visa_exipre_date"
                                        value="{{ $employee->visa_exipre_date }}">
                                    @error('visa_exipre_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" name="contact"
                                        value="{{ $employee->contact }}">
                                    @error('contact')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Picture</label>
                                    <input type="file" class="form-control" name="image" style="min-height: 0">
                                    <img src="{{ asset('uploads/employee/' . $employee->image) }}" alt=""
                                        style="width: 60%" class="mt-4" />
                                    @error('image') <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Other Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Current Address</label>
                                    <input type="text" class="form-control" name="current_address"
                                        value="{{ $employee->current_address }}">
                                    @error('current_address')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Join Date</label>
                                    <input type="date" class="form-control" name="join_date"
                                        value="{{ $employee->join_date }}">
                                    @error('join_date')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Special Note</label>
                                    <textarea class="form-control" name="special_note"
                                        rows="3"> {{ $employee->special_note }}</textarea>
                                    @error('special_note')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Resident Country</label>
                                    <input type="text" class="form-control" name="resident_country"
                                        value="{{ $employee->resident_country }}">
                                    @error('resident_country')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="select" name="department">
                                        @foreach ($departments as $item)
                                        <option value="{{$item->id}}">{{$item->department_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('department')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-sm">Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection