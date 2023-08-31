@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{ url('/') }}">
            <i class="fa-solid fa-house fa-2x p-2" style="color: #0dcaf0"></i>
        </a>
        <div class="row justify-content-center align-items-center" style="min-height: 60vh">
            <div class="col-md-4">
                <div class="card" style="border-radius: 0">

                    <div class="card-body">
                        <div class="card-title d-flex justify-content-center">
                            <img src="{{ asset('images/logortbig.png') }}" alt="Company Logo" width="135">
                        </div>
                        <hr>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }} </label>
                                <div class="">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        style="border-radius: 0">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="form-label">{{ __('Password') }} </label>
                                <div class="">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" style="border-radius: 0">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0 mt-4">

                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-sm btn-outline-info px-4"
                                        style="border-radius: 0">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="col-md-4 mt-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6 justify-content-end d-flex">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}"
                                            style="text-decoration: none">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>

                            </div>

                            <div class="row mb-0 mt-4">

                                <div class="col-md-12">
                                    <span class="text-capitalize">
                                        <div>if your are new to rtech please
                                            <a href="{{ route('register') }}" style="text-decoration: none">register</a>
                                        </div>

                                    </span>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
