<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courses list</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

</head>

<body>
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
@include('sweetalert::alert')
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
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In </button> 
                                      </li>
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

    <div class="d-flex m-5 justify-content-between">
        <h2  style="color: var(--main--color);margin-left: 4rem">Courses</h2>
        <div class="dropdown"  style="margin-right:3rem">
            <button class="btn btn-secondary dropdown-toggle" style="background-color: var(--main--color)" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                filter courses
            </button>
            <ul class="dropdown-menu dropdown-menu-dark border-0 shadow-2xl" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item active" href="{{route('singleCourse.edit',6)}}">6</a></li>
                <li><a class="dropdown-item" href="{{route('singleCourse.edit',12)}}">12</a></li>
                <li><a class="dropdown-item" href="{{route('singleCourse.edit',18)}}">18</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item active" href="{{route('singleCourse.edit','kids')}}">kids</a></li>
                <li><a class="dropdown-item" href="{{route('singleCourse.edit','adults')}}">adults</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('singleCourse.edit',0)}}">All</a></li>

            </ul>
        </div>
    </div>

    <div class="container justify-content-cent" style="margin-left: 10rem;margin-bottom: 20vh" >
        <div class="row">
            @foreach($courses as $course)
            <div class="col-4 my-3 h-50" style="border: 0">
                <div class="card shadow" style="border: 0.5px solid rgba(255, 99, 71, 0.438);border-radius:15px;">
                  <i class="bi bi-heart-fill"></i>
                  <img src="{{$course->course_img}}" class="card-img-top" alt="..." style="border-radius:15px;">
                  <div class="card-body text-center" style="background-color: " >
                    <h5 class="card-title">{{$course->course_name}}</h5>
                    <h4 class="card-text text-danger">{{$course->course_price}}</h4>
                    <a href="{{route('singleCourse.show',$course->id)}}" class="btn btn-outline-primary">show details</a>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    <!-- end projects section -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="#services" class="nav-link px-2 text-muted">Services</a></li>
            <li class="nav-item"><a href="#skills" class="nav-link px-2 text-muted">Technologies</a></li>
            <li class="nav-item"><a href="#projects" class="nav-link px-2 text-muted">Latest Courses</a></li>
            <li class="nav-item"><a href="course" class="nav-link px-2 text-muted">Courses</a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Ahmad AbuToimah,</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
