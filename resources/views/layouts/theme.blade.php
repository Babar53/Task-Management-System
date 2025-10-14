<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Task Management</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
    <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
    <meta name="author" content="CodedThemes">

    <!-- [Favicon] icon -->

    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" >
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" >
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>


</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
            @include('includes.sidebar')
            @include('includes.navbar')


            <div class="pc-container">
                <div class="pc-content">
                    <!-- [ breadcrumb ] start -->
{{--                    <div class="page-header">--}}
{{--                        <div class="page-block">--}}
{{--                            <div class="row align-items-center">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <ul class="breadcrumb">--}}
{{--                                        <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>--}}
{{--                                        <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>--}}
{{--                                        <li class="breadcrumb-item" aria-current="page">Analytics</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
@yield('content')

                </div>
            </div>
{{--            <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>--}}
            <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>
{{--            <script src="{{ asset('assets/js/pcoded.js') }}"></script>--}}
            <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            @vite(['resources/js/app.js']) {{-- ✅ USE THIS --}}
            <!-- [Page Specific JS] start -->
            <!-- Apex Chart -->

{{--            <script src="{{ asset('assets/js/pages/dashboard-analytics.js') }}"></script>--}}
            <!-- [Page Specific JS] end -->
            @stack('scripts')

</body>
<!-- [Body] end -->

</html>
