 <!-- Sidenav Menu Start -->
        <div class="sidenav-menu">

            <!-- Brand Logo -->
            <a href="index.html" class="logo">
                <span class="logo-light">
                    <span class="logo-lg"><img src="{{ asset('backend') }}/assets/images/logo.png" alt="logo"></span>
                    <span class="logo-sm"><img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="small logo"></span>
                </span>

                <span class="logo-dark">
                    <span class="logo-lg"><img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt="dark logo"></span>
                    <span class="logo-sm"><img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="small logo"></span>
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button class="button-sm-hover">
                <i class="ti ti-circle align-middle"></i>
            </button>

            <!-- Full Sidebar Menu Close Button -->
            <button class="button-close-fullsidebar">
                <i class="ti ti-x align-middle"></i>
            </button>

            <div data-simplebar>

                <!--- Sidenav Menu -->
                <ul class="side-nav">
                    <li class="side-nav-title">Dash</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="sidebarInvoice" class="side-nav-link">
                            <span class="menu-icon"><i class="ti ti-settings"></i></span>
                            <span class="menu-text">General Settings</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="settings">
                            <ul class="sub-menu">
                                <li class="side-nav-item">
                                    <a href="apps-invoices.html" class="side-nav-link">
                                        <span class="menu-text">Site Settings</span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="apps-invoice-details.html" class="side-nav-link">
                                        <span class="menu-text">View Invoice</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Sidenav Menu End -->