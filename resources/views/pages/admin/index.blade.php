@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
</div>
@endsection