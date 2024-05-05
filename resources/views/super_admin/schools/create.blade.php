@extends('super_admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="msa-breadcrumb__content mb-3">
                        <div class="msa-breadcrumb__content_start">
                            <div class="breadcrumb__title">
                                <h2>School Create</h2>
                            </div>
                        </div>
                        <div class="msa-breadcrumb__content_end">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">School Create</li>
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
                            <h2 class="h2">School Create</h2>
                        </div>
                        <form class="" action="{{ route('super-admin.school.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3 g-3">
                                <div class="col-md-6">
                                    <label for="amdin_id" class="form-label">Admin</label>
                                    <select name="admin_id" id="amdin_id" class="form-select">
                                        <option value="">--Select Admin--</option>
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Name">
                                </div>
                                <div class="col-6">
                                    <label for="email" class="form-label">email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="col-6">
                                    <label for="phone" class="form-label">phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Phone">
                                </div>
                                <div class="col-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="Address">
                                </div>
                                <div class="col-6">
                                    <label for="service_charge" class="form-label">Service Charge</label>
                                    <input type="number" name="service_charge" class="form-control" id="service_charge"
                                        placeholder="Service Charge" value="0">
                                </div>
                                <div class="col-md-6">
                                    <label for="install_fee" class="form-label">Installment Fee</label>
                                    <input type="text" name="install_fee" class="form-control" id="install_fee"
                                        value="0">
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-12 text-end text-white">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
