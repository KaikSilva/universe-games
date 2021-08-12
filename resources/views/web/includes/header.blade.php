    <!-- start navbar -->
    <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
        <div class="container">
            <a href="layout-1.html" class="navbar-brand me-5">
                    <img src="images/logo-light.png" class="logo-light" alt="" height="22" />
                    <img src="{{asset('backend/assets/images/logo/universe_games__5_-removebg-preview.png')}}" class="logo-dark" alt="" height="120" style=" margin: -36px; margin-right: 9px; ">

                <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
                </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-center me-auto mt-lg-0 mt-2">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('web.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                </ul>
                <div class="mb-4 mb-lg-0">
                    <a href="{{ route('admin.login') }}" class="btn btn-sm nav-btn btn-primary ">Login</a>
                </div>
            </div>
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->