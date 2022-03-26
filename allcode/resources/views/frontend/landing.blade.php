<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Hello!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <meta name="generator" content="Nicepage 3.30.2, nicepage.com">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <title>TechTech</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="assets/css/about.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    <!-- START SETTINGS -->
    <div class="settings-box" id="setting-box">
        <i class="fa-solid fa-gear  my-gear" id="my-gear"></i>
        <div class="settings-container">
            <span class="settings-title">As You Like</span>
            <div class="option-box">
                <h4>Colors</h4>
                <ul class="colors-list">
                    <li class=" main-color active" data-color="#f44336"></li>
                    <li class="color2" data-color="#2196f3"></li>
                    <li class="color3" data-color="#4caf50"></li>
                    <li class="color4" data-color="#ff9800"></li>
                    <li class="color5" data-color="#009688"></li>
                </ul>
            </div>
            <div class="option-box">
                <h4>Images sliding</h4>
                <ul class="images-list">
                    <li class=" yes active" data-value="yes">Yes</li>
                    <li class="no" data-value="no">No</li>
                </ul>
            </div>
            <div class="option-box ">
                <h4>Everything As <span class="settingsQoute">You</span> Order</h4>
            </div>
        </div>
    </div>
    <!-- END SETTINGS -->
    <!-- start landing page  -->
    <div class="landing-page">
        <div class="overlay"></div>
        <div class="container">
            <div class="header-area">
                <div class="logo">TechTech</div>
                <ul class="links">
                    <li> <a href="/" class="active position-relative" style="top: 0">Home</a> </li>
                    <li> <a href="/About" class="active position-relative" style="top: 0">About</a> </li>
                    <li> <a href="/singleCourse" class="active position-relative" style="top: 0">courses</a> </li>
                    @if(auth()->user())
                    <li> <a href="/userProfile" class="active position-relative" style="top: 0">Profile</a> </li>
                    @endif
                    @if(auth()->user()&&auth()->user()->role=='admin')
                    <li> <a href="/home" class="active position-relative" style="top: 0">Dashboard</a> </li>
                    @endif
                    <!-- Signup modal-->


          @if(!auth()->user())
                    <li> 
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up</button>
                    </li>
                    <li> <!-- Login modal -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In </button>                           </li>
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
            <div class="intro">
                <h1>We are <span class="specific">Ready</span> To Teach</h1>
                <p class="qoute">Contact <span class="specific">Us</span> To Learn <span class="specific">Everything</span>
                    AS <span class="specific">The World</span> Need <span class="specific">We</span> Decided <span
                        class="specific">To Lead</span> </p>
            </div>
        </div>
     
    </div>

    <!-- end landing page  -->

    <!-- start about -->
    <div id="about" class="w-50" style="margin-left: 177px;">
        <!-- <div class="container"> -->
        <div class="u-body">
            <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_773b">
                <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm
                            u-valign-middle-xs u-sheet-1">
                    <h1 class="u-custom-font u-font-raleway u-text
                                u-text-default u-text-palette-2-base u-text-1">TechTech</h1>
                    <p class="u-large-text u-text u-text-variant u-text-2">We are a lead company with passion to teach
                        everyone </p>
                    <div class="u-align-left u-container-style u-expanded-width-md
                    u-expanded-width-sm u-expanded-width-xs u-group u-palette-2-base
                    u-radius-20 u-shape-round u-group-1">
                        <div class="u-container-layout u-valign-middle-md
                        u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                            <h6 class="u-custom-font u-font-open-sans
                            u-text u-text-default u-text-3">name</h6>
                            <p class="u-custom-font u-text u-text-4">TechTech</p>
                            <h6 class="u-custom-font u-font-open-sans
                            u-text u-text-default u-text-5">Founded at</h6>
                            <p class="u-custom-font u-text u-text-6">01/02/2022</p>
                            <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-7">Role</h6>
                            <p class="u-custom-font u-text u-text-8">Tech Teaching</p>
                            <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-9">Email</h6>
                            <a href="mailto:ahmadabotoimah@gmail.com"
                                class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-btn u-button-style u-none u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-1">ahmadabotoimah@gmail.com</a>
                            <h6 class="u-custom-font u-font-open-sans u-text u-text-10">Phone</h6>
                            <a href="tel:0777745218"
                                class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-btn u-button-style u-none u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-2">0777745218
                            </a>
                            <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-11">Website</h6>
                            <a href=""
                                class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-2-base u-btn u-button-style u-none u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-3">https://github.com/Ahmad-Abotoimah</a>
                            <h6 class="u-custom-font u-font-open-sans u-text u-text-12">location</h6>
                            <p class="u-custom-font u-text u-text-13">Zarqa, Jordan</p>
                            <h6 class="u-custom-font u-font-open-sans u-text u-text-default u-text-16">Social</h6>
                            <div class="u-social-icons u-spacing-10 u-social-icons-1">
                                <a class="u-social-url" title="facebook" target="_blank"
                                    href="https://www.facebook.com/ahmad.alghzawi.395/"><span
                                        class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-white"><svg
                                            class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                            viewBox="0 0 112 112" style="">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4113">
                                            </use>
                                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                            id="svg-4113">
                                            <path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
                                    c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                                        </svg></span>
                                </a>
                                <a class="u-social-url" title="github" target="_blank" href="https://twitter.com/name">
                                    <span class="u-icon u-icon-circle u-social-icon u-social-linkdin u-text-white">
                                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                            viewBox="0 0 112 112" style="">
                                            <use xmlns:xlink="" xlink:href="#svg-3c2e"></use>
                                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                            id="svg-3c2e">
                                            <path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6
                                            0.1-20.2-2.9-28.5-8.2
	                                        c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	                                        c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,
                                            0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,
                                            2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	                                        c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,
                                            8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	                                        c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,
                                            95.7,35.5,92.2,38.2z"></path>
                                        </svg></span>
                                </a>
                                <a class="u-social-url" title="instagram" target="_blank"
                                    href="https://www.instagram.com/alghzawi6079/">
                                    <span class="u-icon u-icon-circle u-social-icon
                                    u-social-instagram u-text-white">
                                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                            viewBox="0 0 112 112" style="">
                                            <use xmlns:xlink="" xlink:href="#svg-a922">
                                            </use>
                                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0"
                                            id="svg-a922">
                                            <path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,
                                            10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,
                                            23.2-23.2S68.7,32.9,55.9,32.9z
	                                        M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,
                                            6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,
                                            63.3,69.4,55.9,69.4z"></path>
                                            <path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,
                                             5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z">
                                            </path>
                                            <path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,
                                            21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,
                                            22.7-10.2,22.7-22.7
	                                        V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,
                                            7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	                                        c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path>
                                        </svg>
                                    </span>
                                </a>
                                <a class="u-social-url" target="_blank" title="Custom" href=""><span
                                        class="u-icon u-icon-circle u-social-custom u-social-icon u-text-white u-icon-4"><svg
                                            class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                            viewBox="0 0 512 512" style="">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a7cd">
                                            </use>
                                        </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px"
                                            id="svg-a7cd" style="enable-background:new 0 0 512 512;">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80    c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904    C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728    c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816    c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096    C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-round
                    u-radius-20 u-image-1" alt="" data-image-width="997" data-image-height="700"
                        src="assets/images/imgs/my pict.png">
                    <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                        <div class="u-repeater u-repeater-1">
                            <div
                                class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle mleft4">
                                <div
                                    class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                                    <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-18">Courses</p>
                                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-19"
                                        data-animation-name="counter" data-animation-event="scroll"
                                        data-animation-duration="3000">352+</h3>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                                <div
                                    class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                                    <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-20">XP YEARS</p>
                                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-21"
                                        data-animation-name="counter" data-animation-event="scroll"
                                        data-animation-duration="3000">1+</h3>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                                <div
                                    class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                                    <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-22">Students</p>
                                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-23"
                                        data-animation-name="counter" data-animation-event="scroll"
                                        data-animation-duration="3000">500+</h3>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle">
                                <div
                                    class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
                                    <p class="u-text u-text-default u-text-palette-1-dark-2 u-text-24">Technelogies</p>
                                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-25"
                                        data-animation-name="counter" data-animation-event="scroll"
                                        data-animation-duration="3000">50+</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href=""
                        class="u-active-palette-2-light-1 u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-8 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-5">Contact
                        Us Now
                    </a>
            </section>
        </div>
        <!-- </div> -->
    </div>
    <!-- end about -->
    <!-- start services section -->
    <div id="services"></div>
    <div class="services">
        <h2>Our Services</h2>
        <div class="container">
            <div class="services-box">
                <img src="assets/images/imgs/e-learning.png" alt="">
                <h4>E-learning</h4>
            </div>
            <div class="services-box">
                <img src="assets/images/imgs/learning.png" alt="">
                <h4>OnSite Learning</h4>
            </div>
            <div class="services-box">
                <img src="assets/images/imgs/kids.png" alt="">
                <h4>classes for kids</h4>
            </div>
        </div>
        <div class="container">
            <div class="services-box">
                <img src="assets/images/imgs/consulting.png" alt="">
                <h4>Technical Consulting
                </h4>
            </div>
            <div class="services-box">
                <img src="assets/images/imgs/certificate.png" alt="">
                <h4>Accredited certificates</h4>
            </div>
            <div class="services-box">
                <img src="assets/images/imgs/civil.png" alt="">
                <h4>Web Building </h4>


            </div>
        </div>

    </div>
    </div>
    <!-- end services section -->

    <!-- start skills section -->
    <div id="skills">
        <h2 class="skills-header">Technologies</h2>
    </div>
    <div class="container skills gradient-border" id="box">
        <div class="row my-4">
            <div class="col ">
                <img src="assets/images/imgs/errrrrrr.png" alt="html5" class="rounded-logo">
                <h4>HTML5</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/defgfghf.png" alt="css3" class="rounded-logo">
                <h4>CSS3</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/js.png" alt="js" class="rounded-logo">
                <h4>ES6 JS</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/bootstrap.png" alt="bootstrap5" class="rounded-logo">
                <h4>Bootstrap5</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/wordpress.png" alt="wordpress" class="rounded-logo">
                <h4>WordPress</h4>
            </div>
        </div>
        <div class="row my-2">
            <div class="col ">
                <img src="assets/images/imgs/php.png" alt="php" class="rounded-logo">
                <h4>PHP</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/sql.png" alt="sql" class="rounded-logo">
                <h4>sql</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/api.png" alt="api" class="rounded-logo">
                <h4>API</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/laravel.png" alt="laravel" class="rounded-logo">
                <h4>Laravel</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/react.png" alt="react" class="rounded-logo">
                <h4>React JS</h4>
            </div>
        </div>
        <div class="row my-2">
            <div class="col ">
                <img src="assets/images/imgs/oop.png" alt="oop" class="rounded-logo">
                <h4>OOP</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/github.png" alt="git" class="rounded-logo">
                <h4>git/github</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/canva.png" alt="canva" class="rounded-logo">
                <h4>Canva</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/figma.png" alt="figma" class="rounded-logo">
                <h4>Figma</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/miro.png" alt="" class="rounded-logo">
                <h4>Miro</h4>
            </div>
        </div>
        <div class="row my-2">
            <div class="col ">
                <img src="assets/images/imgs/office.png" alt="office" class="rounded-logo">
                <h4>M.Office</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/trello.png" alt="trello" class="rounded-logo">
                <h4>Trello</h4>
            </div>
            <div class="col ">
                <img src="assets/images/imgs/agile.png" alt="agile" class="rounded-logo">
                <h4>Agile Methodology</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/comunication.png" alt="com" class="rounded-logo">
                <h4>Comunication Skills</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/presentation.png" alt="presentation" class="rounded-logo">
                <h4>Presentation Skills</h4>
            </div>
        </div>
        <div class="row my-2">
            <div class="col ">
                <img src="assets/images/imgs/timemanagement.png" alt="time" class="rounded-logo">
                <h4>Time Management</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/seller.png" alt="sales" class="rounded-logo">
                <h4>Sales and Marketting</h4>
            </div>
            <div class="col ">
                <img src="assets/images/imgs/teamwork.png" alt="team" class="rounded-logo">
                <h4>TeamWork</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/selflearning.png" alt="self" class="rounded-logo">
                <h4>Self Learning</h4>
            </div>
            <div class="col rounded">
                <img src="assets/images/imgs/problemsolving.png" alt="presentation" class="rounded-logo">
                <h4>Problem Solving</h4>
            </div>
        </div>
    </div>

    <!-- end skills section -->
    <!-- start projects section -->
    <div id="projects"></div>
    <div class="projects services">
        <h2>Latest Courses</h2>
        <div class="container">

            <div class="services-box col-3">
                <img src="assets/images/imgs/portfolio.png" alt="">
                <section>
                    <h4>Portfolio</h4>
                    <p>fully responsive portfolio using css, html and js </p>
                </section>
            </div>
            <div class="services-box col-3">
                <img src="assets/images/imgs/quizer.png" alt="">
                <section>
                    <h4>Quizer</h4>
                    <p>online exams website using html, css and js </p>
                </section>
            </div>
            <div class="services-box col-3">
                <img src="assets/images/imgs/wordpress-project.png" alt="">
                <section>
                    <h4>Khudarkom</h4>
                    <p>Ecommerce website selling vigitables and related products using wordpress</p>
                </section>
            </div>
        </div>
        <div class="container">
            <div class="services-box col-3">
                <img src="assets/images/imgs/coz.png" alt="">
                <section>
                    <h4>COZ STORE</h4>
                    <p>Ecommerce website selling clothes and related products using php, mysql,css,js,bootstrap</p>
                </section>
            </div>
            <div class="services-box col-3">
                <img src="assets/images/imgs/laravel-project.png" alt="">
                <section>
                    <h4>Laravel Project</h4>
                    <p> a soluta odio culpa corrupti repudiandae veniam similique quibusdam r ipsa vitae commodi!</p>
                </section>
            </div>
            <div class="services-box col-3">
                <img src="assets/images/imgs/react-pro.png" alt="">
                <section>
                    <h4>React Project</h4>
                    <p> a soluta odio culpa corrupti repudiandae veniam similique quibusdam r ipsa vitae commodi!</p>
                </section>
            </div>
        </div>


    </div>
    </div>
    <!-- end projects section -->
    <footer class="py-3 my-4" >
        <ul class="nav justify-content-center border-bottom pb-3 mb-3" style="margin-top: 20vh">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="#services" class="nav-link px-2 text-muted">Services</a></li>
            <li class="nav-item"><a href="#skills" class="nav-link px-2 text-muted">Technologies</a></li>
            <li class="nav-item"><a href="#projects" class="nav-link px-2 text-muted">Latest Courses</a></li>
            <li class="nav-item"><a href="#projects" class="nav-link px-2 text-muted">Courses</a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Ahmad AbuToimah,</p>
    </footer>
    <script src="js/testo.js"></script>


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": ""
        }
    </script>
    <script src="assets/js/main.js"></script>
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
