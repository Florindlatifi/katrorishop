<header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                    <div class="container">
                        <ul class="left">
                            <li>
                            <span>
                                <i class="fa fa-phone"></i> +1 123 456 789
                            </span>
                            </li>
                        </ul>
                        <!--end left-->
                        <ul class="right">
                            <li>
                                <a href="{{ route ('my-ads') }}">
                                    <i class="fa fa-heart"></i>My Ads
                                </a>
                            </li>
                            <li>
                                <a href="{{ route ('sign-in') }}">
                                    <i class="fa fa-sign-in"></i>Sign In
                                </a>
                            </li>
                            <li>
                                <a href="{{ route ('register') }}">
                                    <i class="fa fa-pencil-square-o"></i>Register
                                </a>
                            </li>
                        </ul>
                        <!--end right-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->
                               <!--============ Main Navigation ====================================================================-->
                <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.png" alt="">KATRORISHOP
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                               <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route ('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route ('contact') }}">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route ('seller-detail-1') }}">Seller Detail</a>
                            </li>
                            <li class="nav-item has-child">
                                <a class="nav-link" href="#">Extras</a>
                                <!--1st level -->
                                <ul class="child">
                                    <li class="nav-item">
                                    <a href="{{ route ('my-profile') }}" class="nav-link">My Profile</a>
                                    </li>

                                    <li class="nav-item">
                                    <a href="{{ route ('change-password') }}" class="nav-link">Change
                                    Password</a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="{{ route ('sign-in') }}" class="nav-link">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="{{ route ('register') }}" class="nav-link">Register</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route ('submit') }}" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                            </li>
                        </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                        </nav>
                        <!--end navbar-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Main Navigation ================================================================-->
                <!--============ End Main Navigation ================================================================-->

                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Contact</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->
