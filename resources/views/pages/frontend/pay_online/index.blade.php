@section('title', 'RTech | Pay Online')
@extends('layouts.frontend.app')
@section('content')
    <div class="checkout">
        <div class="container">

            <form action="#">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h2 class="checkout-title my-5" style="color: var(--text-white)">Billing Details</h2>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label>First Name *</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="col-sm-6">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label>Company Name (Optional)</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label>Country *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>


                        <label>Street address *</label>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label>Steet 1 *</label>
                                <input type="text" class="form-control" placeholder="House number and Street name"
                                    required>
                            </div>

                            <div class="col-sm-6">
                                <label>Street 2 *</label>
                                <input type="text" class="form-control" placeholder="Appartments, suite, unit etc ..."
                                    required>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label>Town / City *</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="col-sm-6">
                                <label>State / County *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label>Postcode / ZIP *</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <div class="col-sm-6">
                                <label>Phone *</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <label>Email address *</label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label>Amount USD *</label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkout-create-acc">
                                    <label class="custom-control-label" for="checkout-create-acc">
                                        <a href="{{ url('term-and-conditions') }}"
                                            style="border-bottom: 1px solid var(--light-blue)">Agreed to our term and
                                            conditions?</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkout-create-acc">
                                    <label class="custom-control-label" for="checkout-create-acc">
                                        <a href="{{ url('return-policy') }}"
                                            style="border-bottom: 1px solid var(--light-blue)">Agreed to return
                                            policies?</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <label>Amount USD *</label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <span class="text-info mb-2">We are Accepting all kind of</span>
                                <br>
                                <img src="{{ asset('images/payments.png') }}" alt="" class="mt-2">
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary rounded-0">Process Payment</button>
            </form>
        </div>
    </div>
@endsection

@push('css')
    <style>
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
            font-size: 14px;
            padding: 10px 15px;
            box-shadow: none;
            border-radius: 0;
            color: var(--light-blue);
            background-color: rgba(var(--light-blue), 0.5);
            border-color: rgba(var(----light-blue), 0.2);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: var(--color-primary);
        }

        input[type="text"]::-moz-placeholder,
        input[type="email"]::-moz-placeholder,
        input[type="number"]::-moz-placeholder,
        textarea::-moz-placeholder {
            color: rgba(var(--color-default-rgb), 0.3);
        }

        input[type="text"]::placeholder,
        input[type="email"]::placeholder,
        textarea::placeholder {
            color: rgba(var(--color-default-rgb), 0.3);
        }

        label {
            color: var(--light-blue);
            margin: 5px;
        }
    </style>
@endpush
