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
                    <div class="theme-content bg-theme-style">
                        <div class="d-flex justify-content-between mb-3">
                            <h2 class="h2">Example</h2>
                            <a href="{{ route('super-admin.admin.create') }}" class="align-content-center btn btn-primary stretched-link text-white">Add New Admin</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead class="table-light">
                                    <tr>
                                        <th>Customer name</th>
                                        <th>gender</th>
                                        <th>email address</th>
                                        <th>phone number</th>
                                        <th>address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span>Sean freeman</span>
                                        </td>
                                        <td>
                                            <span>male</span>
                                        </td>
                                        <td>
                                            <span>seanfreeman@gmail.com</span>
                                        </td>
                                        <td>
                                            <span>2551 6995 2555</span>
                                        </td>
                                        <td>
                                            <span>3159 Holly Street Cleveland, GA 30528</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
