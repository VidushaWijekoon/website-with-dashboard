@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Messages
                    <a href="{{ route('dashboard.index') }}"
                        class="btn btn-sm btn-warning text-white float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="bg-info">
                        <tr>
                            <td>Client Name</td>
                            <td>Client Email</td>
                            <td>Client Title</td>
                            <td>Client Message</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact_us_messages as $x)
                        <tr>
                            <td>{{ $x->contact_us_messanger_fullname }}</td>
                            <td>{{ $x->contact_us_title }}</td>
                            <td>{{ $x->contact_us_subject }}</td>
                            <td>{{ substr($x->contact_us_message, 0, 35) }}</td>
                            <td>
                                <a href="#"><i class="fa-solid fa-eye text-primary mx-1"></i></a>
                                <a href="#"><i class="fa-solid fa-trash text-danger mx-1"></i></a>
                                <a href="#"><i class="fa-solid fa-reply text-info mx-1"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection