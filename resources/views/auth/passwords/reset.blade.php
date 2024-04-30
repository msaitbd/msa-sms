@extends('layouts.app')

@section('content')
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center mb-3">
                                        <img src="{{ asset('assets/images/logo.png') }}" style="width: 185px;"
                                            alt="logo">
                                    </div>

                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <p>{{ __('Reset Password') }}</p>
                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                            <input type="text" id="email" class="form-control" name="email"
                                                placeholder="Phone number or email address"
                                                value="{{ $email ?? old('email') }}" autofocus />
                                            @error('email')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="Password" />

                                            @error('password')
                                                <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="confirmPassword">Confirm Password</label>
                                            <input type="password" id="confirmPassword" class="form-control"
                                                name="password_confirmation" placeholder="Confirm Password" />

                                        </div>

                                        <div class="d-grid text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary fa-lg gradient-custom-2 mb-3" type="submit">
                                                {{ __('Reset Password') }}</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Welcome to our school</h4>
                                    <p class="small mb-0">MSAsoft is your trusted partner in mastering the digital
                                        landscape. Elevating Bangladesh's Digital Future through Innovative Coding
                                        Solutions. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
