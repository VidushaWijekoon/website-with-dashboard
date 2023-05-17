@extends('layouts.admin.app')
@section('title', 'Create Employee')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <form action="#">
                        <h4 class="card-title">Personal Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="display-block">Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male"
                                            value="option1">
                                        <label class="form-check-label" for="gender_male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female"
                                            value="option2">
                                        <label class="form-check-label" for="gender_female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visa Type</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option value="1">Visit Visa</option>
                                        <option value="2">Cancel Visa</option>
                                        <option value="3">Own Visa</option>
                                        <option value="4">Freelance Visa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Visa Expire Date</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Picture</label>
                                    <input type="file" class="form-control" style="min-height: 0">
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Other Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Current Address</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Join Date</label>
                                    <input type="date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option value="1">Visit Visa</option>
                                        <option value="2">Cancel Visa</option>
                                        <option value="3">Own Visa</option>
                                        <option value="4">Freelance Visa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Resident Country</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Labour Category</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option value="1">Visit Visa</option>
                                        <option value="2">Cancel Visa</option>
                                        <option value="3">Own Visa</option>
                                        <option value="4">Freelance Visa</option>
                                    </select>
                                </div>


                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection