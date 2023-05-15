@extends('layouts.admin.app')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>
                    Users
                    <a href="{{ route('dashboard.index') }}"
                        class="btn btn-sm btn-warning text-white float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-info">
                            <tr>
                                <td>Username</td>
                                <td>User Email</td>
                                <td>User Created at </td>
                                <td>User Role</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $x)
                            <tr>
                                <td>{{ $x->name }}</td>
                                <td>{{ $x->email }}</td>
                                <td>{{ $x->created_at }}</td>
                                <td>
                                    @if ($x->role_as == 1)
                                    <span class="badge badge-info bg-info">Admin</span>
                                    @else
                                    <span class="badge badge-info bg-warning">Regular User</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/users/' . $x->id . '/edit') }}">
                                        <i class="fa-solid fa-eye text-primary mx-1"></i>
                                    </a>
                                    <a href="{{ url('admin/users/' . $x->id) . '/delete'}}"
                                        onclick="return confirm('Make you sure you want to remove this use')">
                                        <i class="fa-solid fa-trash text-danger mx-1"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection