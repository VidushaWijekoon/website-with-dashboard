@extends('layouts.admin.app');

@section('content')
<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h4>
                    Category
                    <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary text-white float-end">Create
                        Category</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Category</td>
                            <td>Code</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>#</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->code }}</td>
                            <td>
                                @if ($category->status == '1')
                                <span class="badge badge-primary bg-danger">Hide</span>
                                @endif
                                @if ($category->status == '0')
                                <span class="badge badge-primary bg-primary">Show</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('admin/category/' . $category->id . '/edit') }}" class="text-info"
                                    style="text-decoration: none">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ url('admin/category/' . $category->id . '/delete') }}"
                                    onclick="return confirm('make sure you want to delete this category from this list')"
                                    class="text-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <h4>Cannot find any catogories</h4>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection