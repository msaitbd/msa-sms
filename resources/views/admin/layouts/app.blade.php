<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Apple touch icon -->
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <!-- Sidebar section -->
    @include('admin.layouts.sidebar')
    <!-- Main Content area start -->
    <section class="msa-content-section">
        <!-- Header section start -->
        @include('admin.layouts.header')
        <!-- page content wrap start -->
        <div class="page-content-wrap">
            <!-- Page content area start -->
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </section>

    <!-- js files -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
