@extends('layouts.admin.app')
@section('title', 'Create Employees')
@section('content')

<div class="container-fliud">
    <div class="row">

        <form action="" method="POST" enctype="multipart/form-data">
            <fieldset class="mt-2">
                <legend>Personal Information</legend>
                <div class="row">

                    <div class="col-md-6 col-sm-10">

                        <div class="form-group mb-3">
                            <label for="first_name">First Name</label>
                            <input type="email" class="form-control form-control-sm" id="first_name"
                                placeholder="First Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control form-control-sm" id="last_name"
                                placeholder="Last Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="full_name">Full Name</label>
                            <input type="text" class="form-control form-control-sm" id="full_name"
                                placeholder="Full Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="gender">Gender</label>
                            <select class="form-control form-control-sm">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Birthday</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Passport Number</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Passport Expiring Date</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="gender">Visa Type</label>
                            <select class="form-control form-control-sm">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Passport Expiring</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Contact Number</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Resident</label>
                            <input type="text" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-10">

                        <div class="form-group mb-3">
                            <label for="first_name">Relationship</label>
                            <input type="email" class="form-control form-control-sm" id="first_name"
                                placeholder="First Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="last_name">Current Address</label>
                            <input type="text" class="form-control form-control-sm" id="last_name"
                                placeholder="Last Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="full_name">Image</label>
                            <input type="file" class="form-control form-control-sm" id="full_name"
                                placeholder="Full Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Join Date</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Datepartment</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Labour Category</label>
                            <input type="date" class="form-control form-control-sm" id="email" placeholder="Email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Other Notes</label>
                            <textarea type="date" class="form-control form-control-sm" id="email" placeholder="Email"
                                rows="3"></textarea>
                        </div>

                        <div class="mt-3 mb-3 text-center">
                            <button type="submit" name="submit" class="btn btn-sm btn-success mx-2"><i
                                    class="fa-solid fa-floppy-disk mx-1"></i>Save</button>
                            <a href="hr_dashboard.php" class="btn btn-sm btn-danger mx-2"><i
                                    class="fa-solid fa-xmark mx-1"></i>Close</a>
                        </div>

                    </div>

                </div>
            </fieldset>
        </form>

    </div>
</div>

@endsection

@push('css')
<style>
    fieldset,
    legend {
        all: revert;
        font-size: 12px;
    }
</style>
@endpush