<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WorksWeb</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{asset('mycss/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{'mycss/login_register_css/login.css'}}">
    <link rel="stylesheet" href="{{asset('mycss/home.css')}}">
    <script src="{{asset('myjs/my.js')}}"></script>
    <style>
        .mySlides {display:none}
        .w3-left, .w3-right, .w3-badge {cursor:pointer}
        .w3-badge {height:13px;width:13px;padding:0}

        html,
        body {
            margin: 0;
            padding: 0;
        }

        .slider {
            width: 100%;
        }

        .slider-wrapper {
            width: 100%;
            height: 500px;
            position: relative;
        }

        .slide {
            float: left;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 3s linear;
        }

        .slider-wrapper>.slide:first-child {
            opacity: 1;
        }


        /* Next & previous buttons */

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }


        /* Position the "next button" to the right */

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }


        /* On hover, add a black background color with a little bit see-through */

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        @media screen and (max-width: 480px) {
            img {
                max-height: 300px
            }
            .prev,
            .next {
                top:30%
            }
        }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="{{asset('myjs/mapInput.js')}}"></script>

</head>
<body class="sb-nav-fixed">


<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <div id="menu">
    <ul>
        <li>
            <div>
            <a class="navbar-brand ps-3" href="{{route('page.home')}}">WorksWeb</a></div>
        </li>
        <li>
            <div>
            <a class="navbar-brand ps-3" href="{{route('jobs.index')}}">Jobs</a></div>
        </li>
        <li><div>
            <a class="navbar-brand ps-3" href="{{route('companies.index')}}">Companies</a></div>
        </li>
        <li><div style="">
            <a class="navbar-brand ps-3" href="{{route('users.index')}}">Users</a></div>
        </li>
        <li><div style="">
                <a class="navbar-brand ps-3" href="{{route('categories.index')}}">Categories</a></div>
        </li>
    </ul>
    </div>
    <!-- Sidebar Toggle-->
  {{--  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>--}}
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="get" action="{{route('jobs.search')}}">
        <div class="input-group">
            <input name="search" id="input-search" class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>

    <div>
        @if(auth()->user())
       <p style="color: wheat;text-align: center;margin-top: 16px"> {{ auth()->user()->name}}</p>
        @endif
    </div>

    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{route('page.showRegister')}}">Register</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="{{route('page.logout')}}">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>


<div class="slider" id="main-slider">
    <!-- outermost container element -->
    <div class="slider-wrapper">
        <!-- innermost wrapper element -->
        <img src="https://www.process.st/wp-content/uploads/2019/09/Web-Designer-Job-Description-Template.png" alt="First" class="slide" style="width:100%" />
        <!-- slides -->
        <img src="http://lorempixel.com/1024/400/business" alt="Second" class="slide" style="width:100%" />
        <img src="{{asset('storage/images/Best-Web-Designer.jpg')}}" alt="Third" class="slide" style="width:100%" />
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>

<script type="text/javascript">
    (function() {

        function Slideshow(element) {
            this.el = document.querySelector(element);
            this.init();
        }

        Slideshow.prototype = {
            init: function() {
                this.wrapper = this.el.querySelector(".slider-wrapper");
                this.slides = this.el.querySelectorAll(".slide");
                this.previous = this.el.querySelector(".slider-previous");
                this.next = this.el.querySelector(".slider-next");
                this.index = 0;
                this.total = this.slides.length;
                this.timer = null;
                this.nextButton = this.el.querySelector(".next");
                this.prevButton = this.el.querySelector(".prev");

                this.action();
                this.stopStart();
                this.nextSlide();
                this.prevSlide();
            },
            _slideTo: function(slide) {
                var currentSlide = this.slides[slide];
                currentSlide.style.opacity = 1;

                for (var i = 0; i < this.slides.length; i++) {
                    var slide = this.slides[i];
                    if (slide !== currentSlide) {
                        slide.style.opacity = 0;
                    }
                }
            },
            action: function() {
                var self = this;
                self.timer = setInterval(function() {
                    self.index++;
                    if (self.index == self.slides.length) {
                        self.index = 0;
                    }
                    self._slideTo(self.index);

                }, 10000);
            },
            stopStart: function() {
                var self = this;
                self.el.addEventListener("mouseover", function() {
                    clearInterval(self.timer);
                    self.timer = null;

                }, false);
                self.el.addEventListener("mouseout", function() {
                    self.action();

                }, false);
            },
            nextSlide: function() {
                var self = this;
                self.nextButton.addEventListener("click", function() {
                    clearInterval(self.timer);
                    self.timer = null;
                    self.index++;
                    if (self.index == self.slides.length) {
                        self.index = 0;
                    }
                    self._slideTo(self.index);

                });
            },
            prevSlide: function() {
                var self = this;
                self.prevButton.addEventListener("click", function() {
                    clearInterval(self.timer);
                    self.timer = null;
                    self.index--;
                    if (self.index == -1) {
                        self.index = self.slides.length - 1;
                    }

                    self._slideTo(self.index);

                });
            }


        };

        document.addEventListener("DOMContentLoaded", function() {

            var slider = new Slideshow("#main-slider");

        });


    })();
</script>


 {{--   <div class="w3-content w3-display-container">
        <img class="mySlides" src="{{asset('storage/images/Best-Web-Designer.jpg')}}" style="width:100%;height: 450px" alt="img">
        <img class="mySlides" src="https://www.thoughtco.com/thmb/G7ML8YAMHYLgUS_dGMNjJsdXpME=/3864x2577/filters:fill(auto,1)/web-designer-developing-responsive-website-layout-946928244-5bcf7fe246e0fb00513cc772.jpg" style="width:100%;height: 450px" alt="img">
        <img class="mySlides" src="https://www.process.st/wp-content/uploads/2019/09/Web-Designer-Job-Description-Template.png" style="width:100%;height: 450px" alt="img">
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
    </div>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-white";
    }
</script>--}}



        <main>
            <div class="container-fluid px-4">
    <div>
        @yield('content')
    </div>

            </div>
        </main>

    <footer class="py-4 bg-light mt-auto">

    </footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('myjs/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('myjs/chart-area-demo.js')}}"></script>
<script src="{{asset('myjs/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('myjs/datatables-simple-demo.js')}}"></script>
</body>
</html>
