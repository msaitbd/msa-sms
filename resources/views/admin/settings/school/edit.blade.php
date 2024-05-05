@extends('admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="msa-breadcrumb__content mb-3">
                        <div class="msa-breadcrumb__content_start">
                            <div class="breadcrumb__title">
                                <h2>School Edit</h2>
                            </div>
                        </div>
                        <div class="msa-breadcrumb__content_end">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">School Edit</li>
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
                            <h2 class="h2">School Edit</h2>
                        </div>
                        <form class="" action="{{ route('admin.settings.school.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $school->id }}">
                            <div class="row mb-3 g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">School Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        value="{{ $school->name }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        value="{{ $school->email ?? $school->admin->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone" value="{{ $school->phone ?? $school->admin->phone }}">
                                    @error('phone')
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
