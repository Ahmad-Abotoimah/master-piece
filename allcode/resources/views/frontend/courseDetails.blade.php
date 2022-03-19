
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/hyper_2/modern/apps-ecommerce-products-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 13:12:30 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Hyper | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <base href="/public">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- third party css -->
    <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body class="loading" data-layout="detached" data-layout-config='{"leftSidebarCondensed":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Signup modal-->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up Modal</button>
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

<!-- Login modal -->
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In Modal</button>
<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                </div>

                <form action="#" class="ps-3 pe-3">

                    <div class="mb-3">
                        <label for="emailaddress1" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                    </div>

                    <div class="mb-3">
                        <label for="password1" class="form-label">Password</label>
                        <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck2">
                            <label class="form-check-label" for="customCheck2">Remember me</label>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn rounded-pill btn-primary" type="submit">Sign In</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@include('sweetalert::alert')
        <div class="content-page">
            <div class="content">

                <div class="header-area">
                    <div class="logo"> <a href="/" style="text-decoration: none;color: var(--main--color)"> TechTech</a> </div>
                    <ul class="links">
                        <li> <a href="landing.html" class="active position-relative" style="top: 0">Home</a> </li>
                    </ul>
                </div>
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
                <div class="row my-1">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <!-- Product image -->
                                        <a href="javascript: void(0);" class="text-center d-block mb-4" style="margin-top: 10vh ">
                                            <img src="{{$course->course_img}}" class="img-fluid" style="width: 400px;" alt="Product-img" />
                                        </a>


                                    </div> <!-- end col -->
                                    <div class="col-lg-7">
                                        <form class="ps-lg-4">
                                            <!-- Product title -->
                                            <h3 class="mt-0">{{$course->course_name}} <a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                            <p class="mb-1">Added Date: {{$course->created_at}}</p>


                                            <!-- Product stock -->
                                            <div class="mt-3">
                                                <h4><span class="badge {{$seats>0?'badge-success-lighten':"badge-danger-lighten"}}">{{$course->status}}</span></h4>
                                            </div>

                                            <!-- Product description -->
                                            <div class="mt-4">
                                                <h6 class="font-14"> Price:</h6>
                                                <h3> JD {{ $course->course_price}}</h3>
                                            </div>


                                            <!-- Product description -->
                                            <div class="mt-4">
                                                <h6 class="font-14">Description:</h6>
                                                <p>{{$course->course_description}}</p>
                                            </div>

                                            <!-- Product information -->
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="font-14">all Seats:</h6>
                                                        <p class="text-sm lh-150">{{$course->course_seats}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h6 class="font-14">Available Seats:</h6>
                                                        <p class="text-sm lh-150">{{$seats}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h6 class="font-14">Reserved Seats:</h6>
                                                        <p class="text-sm lh-150">{{$tickets}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 class="font-14">Starting date:</h6>
                                                        <p class="text-sm lh-150">{{$course->course_start_date}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h6 class="font-14">End date:</h6>
                                                        <p class="text-sm lh-150">{{$course->course_end_date}}</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button class="btn btn-info mt-2"><a href="{{route('ticket.show',$course->id)}}" style="color: #fff"> Join Now</a> </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div> <!-- end col -->
                                </div> <!-- end row-->


                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->

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


<!-- Right Sidebar -->
<div class="end-bar">

    <div class="rightbar-title">
        <a href="javascript:void(0);" class="end-bar-toggle float-end">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
    </div>

    <div class="rightbar-content h-100" data-simplebar>

        <div class="p-3">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
            </div>

            <!-- Settings -->
            <h5 class="mt-3">Color Scheme</h5>
            <hr class="mt-1" />

            <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                       id="light-mode-check" checked />
                <label class="form-check-label" for="light-mode-check">Light Mode</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                       id="dark-mode-check" />
                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
            </div>

            <!-- Left Sidebar-->
            <h5 class="mt-4">Left Sidebar</h5>
            <hr class="mt-1" />

            <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="compact" value="fixed" id="fixed-check"
                       checked />
                <label class="form-check-label" for="fixed-check">Scrollable</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input type="checkbox" class="form-check-input" name="compact" value="condensed"
                       id="condensed-check" />
                <label class="form-check-label" for="condensed-check">Condensed</label>
            </div>

            <div class="d-grid mt-4">
                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                   class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
                    Now</a>
            </div>
        </div> <!-- end padding-->

    </div>
</div>

<div class="rightbar-overlay"></div>
<!-- /End-bar -->


<!-- bundle -->
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/hyper_2/modern/apps-ecommerce-products-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 13:12:30 GMT -->
</html>
