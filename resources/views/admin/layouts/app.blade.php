<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Fungi Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Fungi Personal Portfolio" name="description" />
    <meta content="CoderSuojon" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">


    @stack('styles')

    <!-- Theme Config Js -->
    <script src="{{ asset('backend') }}/assets/js/config.js"></script>

    <!-- Vendor css -->
    <link href="{{ asset('backend') }}/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    {{-- Additional Head Content --}}
    @yield('head')
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        
        <!-- Sidenav Menu Start -->
        @include('admin.partials.sidebar')
        <!-- Sidenav Menu End -->
        

        <!-- Topbar Start -->
        @include('admin.partials.topbar')
        <!-- Topbar End -->

        <!-- Search Modal -->
        @include('admin.partials.header-search-modal')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="page-content">
            <div class="page-container">

                <div class="row">
                    <div class="col-12">

                        @if(isset($header))
                            <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-18 fw-semibold m-0">{{ $header }}</h4>
                                </div>
                                <div class="mt-3 mt-sm-0">
                                    <form action="javascript:void(0);">
                                        <div class="row g-2 mb-0 align-items-center">
                                            <div class="col-auto">
                                                <a href="javascript: void(0);" class="btn btn-light">
                                                    <i class="ti ti-sort-ascending me-1"></i> Sort By
                                                </a>
                                            </div>
                                            <!--end col-->
                                            <div class="col-sm-auto">
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-0 shadow" data-provider="flatpickr" data-deafult-date="01 May to 31 May" data-date-format="d M" data-range-date="true">
                                                    <span class="input-group-text bg-primary border-primary text-white">
                                                        <i class="ti ti-calendar fs-15"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div><!-- end card header -->
                        @endif

                    </div>
                    <!--end col-->
                </div> <!-- end row-->

                {{-- Main Page Content --}}
                @yield('content')

            </div> <!-- container -->

            <!-- Footer Start -->
           @include('admin.partials.footer')
            <!-- end Footer -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    @include('admin.partials.theme-settings')

    <!-- Vendor js -->
    <script src="{{ asset('backend') }}/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('backend') }}/assets/js/app.js"></script>

    <!-- Apex Chart js -->
    <script src="{{ asset('backend') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- Projects Analytics Dashboard App js -->
    <script src="{{ asset('backend') }}/assets/js/pages/dashboard-sales.js"></script>

    {{-- Additional Scripts --}}
    @stack('scripts')

</body>


</html>