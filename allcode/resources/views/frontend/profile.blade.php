<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 13:12:48 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Profile </title>
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
                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{auth()->user()->img}}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                        <h4 class="mb-0 mt-2">{{auth()->user()->name}}</h4>
                                        <p class="text-muted font-14">{{auth()->user()->major}}</p>

                                        

                                        <div class="text-start mt-3">
                                           
                                            <p class="text-muted mb-2 font-13"><strong> Name :</strong> <span class="ms-2">Mr . {{auth()->user()->name}}
                                                    </span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{auth()->user()->phone}}</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2 ">{{auth()->user()->email}}</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Number of courses :</strong> <span class="ms-2">{{count($tickets)}}</span></p>
                                        </div>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

      
                            </div> <!-- end col-->

                            <div class="col-xl-8 col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    My Course
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item">
                                                <a href="#timeline" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                                                    Timeline
                                                </a>
                                            </li> --}}
                                            <li class="nav-item">
                                                <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    Edit Profile
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane" id="aboutme">
    
                                                {{-- <h5 class="text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                                    Experience</h5>

                                                <div class="timeline-alt pb-0">
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                                            <p class="font-14">websitename.com <span class="ms-2 font-12">Year: 2015 - 18</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-3">Everyone realizes why a new common language
                                                                would be desirable: one could refuse to pay expensive translators.
                                                                To achieve this, it would be necessary to have uniform grammar,
                                                                pronunciation and more common words.</p>
                                                        </div>
                                                    </div>
    
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                                            <p class="font-14">Software Inc. <span class="ms-2 font-12">Year: 2012 - 15</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-3">If several languages coalesce, the grammar
                                                                of the resulting language is more simple and regular than that of
                                                                the individual languages. The new common language will be more
                                                                simple and regular than the existing European languages.</p>

                                                        </div>
                                                    </div>
    
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                                            <p class="font-14">Coderthemes Design LLP <span class="ms-2 font-12">Year: 2010 - 12</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-2">The European languages are members of
                                                                the same family. Their separate existence is a myth. For science
                                                                music sport etc, Europe uses the same vocabulary. The languages
                                                                only differ in their grammar their pronunciation.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end timeline -->         --}}

                                                <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                                                    Your Courses</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-nowrap mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>course name</th>
                                                                <th>Course price</th>
                                                                <th>Course Starting date</th>
                                                                <th>Course ending date</th>
                                                                <th>Course Type</th>
                                                                <th>Date you apply</th>
                                                                <th>Status</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($tickets as $ticket)
                                                            <tr>
                                                                <td>{{$ticket->id}}</td>
                                                                <td>{{$ticket->course->course_name}}</td>
                                                                <td>{{$ticket->course->course_price}}</td>
                                                                <td>{{$ticket->course->course_start_date}}</td>
                                                                <td>{{$ticket->course->course_end_date}}</td>
                                                                <td>{{$ticket->course->type}}</td>
                                                                <td>{{$ticket->created_at}}</td>
                                                                @if($ticket->status=='pending')
                                                                <td><span class="badge  badge-info-lighten">{{$ticket->status}}</span></td>
                                                                @elseif($ticket->status=='accepted')
                                                                <td><span class="badge  badge-success-lighten">{{$ticket->status}}</span></td>
                                                                @else
                                                                <td><span class="badge  badge-danger-lighten">{{$ticket->status}}</span></td>
                                                                @endif
                                                            </tr>
                                                           @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
    
                                            </div> <!-- end tab-pane -->
                                            <!-- end about me section content -->
    

                                            <div class="tab-pane" id="settings">
                                                <form action='{{route('userUpdate.update',auth()->user()->id)}}' method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">User Name</label>
                                                        <input type="text" id="simpleinput" class="form-control"  name="name" required value={{auth()->user()->name}} >
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="simpleinput" class="form-label">email</label>
                                                        <input type="email" id="simpleinput" class="form-control"  name="email" required value={{auth()->user()->email}}>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">
                                                            Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="password" id="password"
                                                                   class="form-control"
                                                                   placeholder="Enter your password" name="password" required>
                                                            <div class="input-group-text" data-password="false">
                                                                <span class="password-eye"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="mb-3">
                                                        <img class="rounded" src="{{auth()->user()->img}}" alt="img" height="48">
                                                        <label for="example-fileinput" class="form-label">user img</label>
                                                        <input type="file" id="example-fileinput"
                                                               class="form-control" name="img" required value={{auth()->user()->img}}>
                                                    </div>
                                            
                                                    <div class="mb-3">
                                                        <label for="example-fileinput" class="form-label"> phone </label>
                                                        <input type="text" id="example-fileinput"
                                                               class="form-control" name="phone" required value={{auth()->user()->phone}}>
                                                    </div>
                                            
                                                    <div class="mb-3">
                                                        <label class="form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" id="singledaterange" name="date_of_birth" value={{auth()->user()->date_of_birth}}>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Major</label>
                                                        <input type="text" class="form-control" id="singledaterange" name="major" value={{auth()->user()->major}}>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                            <!-- end settings content-->
    
                                        </div> <!-- end tab-content -->
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
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

<!-- Mirrored from coderthemes.com/hyper_2/modern/pages-profile-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jan 2022 13:12:48 GMT -->
</html>
