<!DOCTYPE html>
<html  class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $portFolioData->username }} : {{ $portFolioData->oneliner }}  </title>
    <link rel="icon" href="{{ asset('assets/img/icon.webp') }}" type="image/gif" sizes="16x16">
    <link rel="icon" href="{{ asset('assets/img/icon.webp') }}" type="image/gif" sizes="18x18">
    <link rel="icon" href="{{ asset('assets/img/icon.webp') }}" type="image/gif" sizes="20x20">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" 
    href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>
     <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <h2>
                            <a onclick="window.location.reload();">{{ $portFolioData->username }}</a>
                        </h2>
                        <div class="header-oneliner">
                            <p style="color: #ffbd39; font-family: cursive;font-size: 15px">{{ $portFolioData->oneliner }} <span style="color: red">&hearts;</span></p>
                        </div>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9">
                    <div class="menu">
                        <nav>
                            <ul>
                                <li class="current"><a href="#home">Home</a></li>
                                <li><a href="#about">About Me</a></li>
                                <li><a href="#technologies">Technologies</a></li>
                                <li><a href="#tools">Tools & Education</a></li>
                                <li><a href="#experience">Experience</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main-wrape">
        @yield('content')
    <footer class="footer">
            <div class="footer-top pt-70 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-widget-single">
                                <h2>Thanks for visting</h2>
                                <p>Stay Connected!
                                Thank you for visiting my portfolio. I'm passionate about transforming ideas into impactful software solutions. Whether you're looking to collaborate, have questions, or just want to say hello, feel free to reach out! Let's create something amazing together.
                                <br>
                                Follow Me
                                Connect with me on social media and join me on my journey through the world of technology and innovation.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="footer-widget-single">
                                <h3>Contact Me</h3>
                                <p>
                                  Mumbai, Maharashtra, India 
                                  <br>
                                  <strong>Phone:</strong> +91 7303669136<br>
                                  <strong>Email:</strong> {{$portFolioData->portfolioUserEmail}}<br>
                                </p>
                                <ul class="social-link">
                                    <li><a href="{{$portFolioData->fblink}}" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$portFolioData->twlink}}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$portFolioData->instalink}}"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$portFolioData->linkedinlink}}"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom pt-25 pb-25 text-center section-bg">
                <p>@ Copyright <a href="#">Khurram Shaikh</a>  | All Rights Reserved</p>
            </div>
        </footer>
    </main>
    <!-- Js File -->
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nav.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>