@extends('super_admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="msa-breadcrumb__content mb-3">
                        <div class="msa-breadcrumb__content_start">
                            <div class="breadcrumb__title">
                                <h2>School Admin Edit</h2>
                            </div>
                        </div>
                        <div class="msa-breadcrumb__content_end">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">School Admin Edit</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="theme-content bg-theme-style">
                        <div class="mb-3">
                            <h2 class="h2">School Admin Edit</h2>
                        </div>
                        <form class="" action="{{ route('super-admin.admin.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $school->id }}">
                            <input type="hidden" name="user_id" value="{{ $school->admin->id }}">
                            <div class="row mb-3 g-3">
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="first_name"
                                        value="{{ $school->admin->first_name }}">
                                    @error('first_name')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="last_name"
                                        value="{{ $school->admin->last_name }}">
                                    @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        value="{{ $school->admin->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="phone" class="form-label">Mobile</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone" value="{{ $school->admin->phone }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 g-3">
                                <div class="col-md-6">
                                    <label for="school_name" class="form-label">School Name</label>
                                    <input type="text" name="school_name" class="form-control" id="school_name"
                                        value="{{ $school->school_name }}">
                                    @error('school_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="address" value="{{ $school->address }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label for="service_charge" class="form-label">Service Charge</label>
                                    <input type="number" name="service_charge" class="form-control" id="service_charge"
                                        placeholder="Service Charge" value="{{ $school->service_charge }}">
                                    @error('service_charge')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="install_fee" class="form-label">Installment Fee</label>
                                    <input type="text" name="install_fee" class="form-control" id="install_fee"
                                        value="{{ $school->install_fee }}">
                                    @error('install_fee')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12 text-end text-white">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
