<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 13:12:51 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Timeline | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>
@include('sweetalert::alert')
<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                </div>

                <form method="POST" action="{{ route('login') }}">
                   @csrf
                    <div class="mb-3">
                        <label for="emailaddress1" class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password1" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="customCheck2">Remember me</label>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn rounded-pill btn-primary" type="submit">Sign In</button>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                </div>

                <form class="ps-3 pe-3" action="#">

                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                    </div>

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck1">
                            <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Sign Up Free</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
    .col-3{
        margin-top: 5vh;
    }
    .card-img-top{
        height: 320px;
    }
    .card-container{
        width: 18rem;
        min-height: 350px;
        height: 350px;
    }

</style>
<header>
<div class="header-area">
    <div class="logo"> <a href="/" style="text-decoration: none;color: var(--main--color)"> TechTech</a> </div>
    <ul class="links">
        <li> <a href="/" class="active position-relative" style="top: 0">Home</a> </li>
        <li> <a href="/About" class="active position-relative" style="top: 0">About</a> </li>
        <li> <a href="/singleCourse" class="active position-relative" style="top: 0">courses</a> </li>
        @if(auth()->user())
                    <li> <a href="/userProfile" class="active position-relative" style="top: 0">Profile</a> </li>
                    @endif
        <!-- Signup modal-->


@if(!auth()->user())
        <li> 
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up</button>
        </li>
        <li> <!-- Login modal -->
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In </button> </li>
            @else
            <li class="nav-item dropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endif
    </ul>
</div>
</header>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/imgs/coursesb1.png" class="d-block w-100 mb-2" alt="coursesb1">
            <div class="carousel-caption d-none d-md-block">
                <h5>For All</h5>
                <p>We have basic lessons for all ages and levels.</p>
                <button class="btn btn-primary">See More</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/imgs/coursesb2.png" class="d-block w-100 mb-2" alt="coursesb1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
                <button class="btn btn-primary">See More</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/imgs/coursesb3.png" class="d-block w-100" alt="coursesb1">
            <div class="carousel-caption d-none d-md-block mb-2">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                <button class="btn btn-primary">See More</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Start Content-->
<div class="container-fluid mt-5">

    <!-- Begin page -->
    <div class="wrapper">


        <div class="content-page">
            <div class="content">


                <div class="row">
                    <div class="col-12">
                        <div class="timeline" dir="ltr">

                            <div class="timeline-show mb-3 text-center">
                                <h5 class="m-0 time-show-name">Today</h5>
                            </div>

                            <div class="timeline-lg-item timeline-item-left">
                                <div class="timeline-desk">
                                    <div class="timeline-box">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="mt-0 mb-1 font-16">Completed UX design project for our client</h4>
                                        <p class="text-muted"><small>22 July, 2019</small></p>
                                        <p>Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? </p>

                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 17</a>
                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 89</a>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-lg-item timeline-item-right">
                                <div class="timeline-desk">
                                    <div class="timeline-box">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="mt-0 mb-1 font-16">Yay! We are celebrating our first admin release.</h4>
                                        <p class="text-muted"><small>22 July, 2019</small></p>
                                        <p>Consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>

                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 148</a>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-show my-3 text-center">
                                <h5 class="m-0 time-show-name">Yesterday</h5>
                            </div>

                            <div class="timeline-lg-item timeline-item-left">
                                <div class="timeline-desk">
                                    <div class="timeline-box">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="mt-0 mb-1 font-16">We released new version of our theme Ubold.</h4>
                                        <p class="text-muted"><small>21 July, 2019</small></p>
                                        <p>3 new photo Uploaded on facebook fan page</p>

                                        <div class="timeline-album mb-3">
                                            <a href="javascript: void(0);">
                                                <img alt="" src="assets/images/small/small-1.jpg">
                                            </a>
                                            <a href="javascript: void(0);">
                                                <img alt="" src="assets/images/small/small-2.jpg">
                                            </a>
                                            <a href="javascript: void(0);">
                                                <img alt="" src="assets/images/small/small-3.jpg">
                                            </a>
                                        </div>

                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">🏆 94</a>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-lg-item timeline-item-right">
                                <div class="timeline-desk">
                                    <div class="timeline-box">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="mt-0 mb-1 font-16">We have archieved 25k sales in our themes.</h4>
                                        <p class="text-muted"><small>21 July, 2019</small></p>
                                        <p>Outdoor visit at California State Route 85 with John Boltana &
                                            Harry Piterson regarding to setup a new show room.</p>

                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 1.4k</a>
                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 2k</a>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-lg-item timeline-item-left">
                                <div class="timeline-desk">
                                    <div class="timeline-box">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="mt-0 mb-1 font-16">Conference call with UX team</h4>
                                        <p class="text-muted"><small>21 July, 2019</small></p>
                                        <p>Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>
                                            Lorem ipsum dolor sit amet consiquest dio</p>

                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 89</a>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-show my-3 text-center">
                                <h5 class="m-0 time-show-name">2018</h5>
                            </div>

                            <div class="timeline-lg-item timeline-item-right">
                                <div class="timeline-desk">
                                    <div class="timeline-box">
                                        <span class="arrow"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="mt-0 mb-1 font-16">Join new team member Alex Smith</h4>
                                        <p class="text-muted"><small>10 December, 2018</small></p>
                                        <p>Alex Smith is a Senior Software (Full Stack) engineer with a deep passion for building usable, functional & pretty web applications. </p>
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-3.jpg" alt="Arya S" class="rounded-circle me-2" height="24">
                                            <div>
                                                <h5 class="mt-1 font-14 mb-0">
                                                    Alex Smith <small>- Senior Software (Full Stack)</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-lg-item timeline-item-left">
                                <div class="timeline-desk">
                                    <div class="timeline-box">
                                        <span class="arrow-alt"></span>
                                        <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                        <h4 class="mt-0 mb-1 font-16">First release of Hyper admin dashboard template</h4>
                                        <p class="text-muted"><small>16 July, 2018</small></p>
                                        <p>Outdoor visit at California State Route 85 with John Boltana &
                                            Harry Piterson regarding to setup a new show room.</p>

                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 10k</a>
                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 3.2k</a>
                                        <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 7.1k</a>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end timeline -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- End Content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div> <!-- content-page -->

    </div> <!-- end wrapper-->
</div>
<!-- END Container -->




<!-- bundle -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 13:12:51 GMT -->
</html>
