<header class="site-header" id="site-header">
    <nav class="navbar navbar-expand-xl" id="site-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img class="img-fluid"
                    src="{{ asset('frontend') }}/image/fungi_logo.png" alt="fungi logo"></a>

            <!-- download button -->
            <a class="btn btn-main header-btn ms-auto d-xl-none" href="#">Download CV</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                {{-- navbar --}}
                @include('frontend.partials.navbar')

                {{-- hero social icon --}}
                @include('frontend.partials.hero-social')

            </div> <!-- .collapse -->

            <!-- download button -->
            <a class="btn btn-main header-btn d-none d-xl-flex" href="#">Download CV</a>

        </div><!-- .container -->
    </nav> <!-- .navbar -->
</header> <!-- .site-header -->
