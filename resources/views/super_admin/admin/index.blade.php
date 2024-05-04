@extends('super_admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="msa-breadcrumb__content mb-3">
                        <div class="msa-breadcrumb__content_start">
                            <div class="breadcrumb__title">
                                <h2>School Admin List</h2>
                            </div>
                        </div>
                        <div class="msa-breadcrumb__content_end">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">School Admin List</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">
                        <h2 class="h2">Example</h2>
                        <a href="{{ route('super-admin.admin.create') }}"
                            class="align-content-center btn btn-primary text-white">Add New Admin</a>
                    </div>
                    <div class="theme-content bg-theme-style">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead class="table-light">
                                    <tr>
                                        <th>Admin</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>School</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schools as $school)
                                        <tr>
                                            <td>
                                                <span>{{ $school->admin->name }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $school->admin->email }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $school->admin->phone }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $school->school_name }}</span>
                                            </td>
                                            <td>
                                                @if ($school->status == STATUS_ACTIVE)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('super-admin.admin.edit', $school->id) }}"><i
                                                        class="fa fa-edit text-primary"></i></a>
                                                <a href=""><i class="fa fa-trash text-danger"></i></a>
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
    </div>
@endsection
