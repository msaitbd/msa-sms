@extends('super_admin.layouts.app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="msa-breadcrumb__content mb-3">
                        <div class="msa-breadcrumb__content_start">
                            <div class="breadcrumb__title">
                                <h2>Dashboard</h2>
                            </div>
                        </div>
                        <div class="msa-breadcrumb__content_end">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Msasoft</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="msa-dashboard_status msa-dashboard_status_style bg-theme-style">
                        <div class="msa-dashboard_status_img">
                            <img src="assets/images/user.png" alt="icon">
                        </div>
                        <div class="msa-status_content">
                            <h2>950</h2>
                            <h3>Users</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="msa-dashboard_status msa-dashboard_status_style bg-theme-style">
                        <div class="msa-dashboard_status_img">
                            <img src="assets/images/user.png" alt="icon">
                        </div>
                        <div class="msa-status_content">
                            <h2>950</h2>
                            <h3>Users</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="msa-dashboard_status msa-dashboard_status_style bg-theme-style">
                        <div class="msa-dashboard_status_img">
                            <img src="assets/images/user.png" alt="icon">
                        </div>
                        <div class="msa-status_content">
                            <h2>950</h2>
                            <h3>Users</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="msa-dashboard_status msa-dashboard_status_style bg-theme-style">
                        <div class="msa-dashboard_status_img">
                            <img src="assets/images/user.png" alt="icon">
                        </div>
                        <div class="msa-status_content">
                            <h2>950</h2>
                            <h3>Users</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
