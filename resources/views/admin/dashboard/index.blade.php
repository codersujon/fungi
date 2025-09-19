@extends('admin.layouts.app')

@section('title', 'Fungi Dashboard')


@section('content')

    <div class="row">
        <div class="col">
            <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 text-center">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Orders</h5>
                            <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                <div class="user-img fs-42 flex-shrink-0">
                                    <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                        <iconify-icon icon="solar:case-round-minimalistic-bold-duotone"></iconify-icon>
                                    </span>
                                </div>
                                <h3 class="mb-0 fw-bold">687.3k</h3>
                            </div>
                            <p class="mb-0 text-muted">
                                <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 9.19%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Total Returns</h5>
                            <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                <div class="user-img fs-42 flex-shrink-0">
                                    <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                        <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                    </span>
                                </div>
                                <h3 class="mb-0 fw-bold">9.62k</h3>
                            </div>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 26.87%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Avg. Sales Earnings</h5>
                            <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                <div class="user-img fs-42 flex-shrink-0">
                                    <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                        <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                    </span>
                                </div>
                                <h3 class="mb-0 fw-bold">$98.24 <small class="text-muted">USD</small></h3>
                            </div>
                            <p class="mb-0 text-muted">
                                <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 3.51%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Number of Visits</h5>
                            <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                <div class="user-img fs-42 flex-shrink-0">
                                    <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                        <iconify-icon icon="solar:eye-bold-duotone"></iconify-icon>
                                    </span>
                                </div>
                                <h3 class="mb-0 fw-bold">87.94M</h3>
                            </div>
                            <p class="mb-0 text-muted">
                                <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 1.05%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->

            @if(isset($overview))
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Overview</h4>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-light bg-opacity-50">
                                <div class="row text-center">
                                    <div class="col-md-3 col-6">
                                        <p class="text-muted mt-3 mb-1">Revenue</p>
                                        <h4 class="mb-3">
                                            <span class="ti ti-square-rounded-arrow-down text-success me-1"></span>
                                            <span>$29.5k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <p class="text-muted mt-3 mb-1">Expenses</p>
                                        <h4 class="mb-3">
                                            <span class="ti ti-square-rounded-arrow-up text-danger me-1"></span>
                                            <span>$15.07k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <p class="text-muted mt-3 mb-1">Investment</p>
                                        <h4 class="mb-3">
                                            <span class="ti ti-chart-infographic me-1"></span>
                                            <span>$3.6k</span>
                                        </h4>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <p class="text-muted mt-3 mb-1">Savings</p>
                                        <h4 class="mb-3">
                                            <span class="ti ti-pig me-1"></span>
                                            <span>$6.9k</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div dir="ltr">
                                    <div id="revenue-chart" class="apex-charts" data-colors="#6ac75a,#465dff,#783bff,#f7577e">
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
            @endif
            
        </div> <!-- end col-->
    </div> <!-- end row-->

@endsection
