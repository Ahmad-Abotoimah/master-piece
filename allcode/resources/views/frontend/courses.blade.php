<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courses list</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
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
{{--    <div id="carouselExampleControls" class="carousel slide auto-apply" data-bs-ride="carousel">--}}
{{--        <div class="carousel-inner">--}}
{{--            <div class="carousel-item active">--}}
{{--                <img src="assets/imgs/coursesb1.png" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="assets/imgs/coursesb2.png" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--            <div class="carousel-item">--}}
{{--                <img src="assets/imgs/coursesb3.png" class="d-block w-100" alt="...">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </button>--}}
{{--        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button>--}}
{{--    </div>--}}

    <!-- start projects section -->

{{--    <h2 style="text-align: left;color: var(--main--color);margin:20vh 0 10vh 10rem">Courses</h2>--}}
    <div class="d-flex m-5 justify-content-between">
        <h2  style="color: var(--main--color);margin-left: 4rem">Courses</h2>
        <div class="dropdown"  style="margin-right:3rem">
            <button class="btn btn-secondary dropdown-toggle" style="background-color: var(--main--color)" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item active" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
    </div>

    <div class="container justify-content-cent" style="margin-left: 10rem;margin-bottom: 20vh" >
        <div class="row">
            @foreach($courses as $course)
          <div class="col-4 my-3 ">
            <div class="card card-container" >
                <img src="{{$course->course_img}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$course->course_name}}</h5>
                  <a href="{{route('singleCourse.show',$course->id)}}" class="btn btn-primary">show details</a>
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
