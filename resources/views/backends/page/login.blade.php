<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('mycss/login_register_css/login.css')}}">
    <style>

    </style>
    <title>Document</title>

    <style>
        .alert_error{
            text-align: center;
        }
       .form-control.is-valid,.was-validated .form-control:valid{
            border-color: #d90000;
        }
       p{
           color: wheat;
       }
       .kpx_authTitle{
           color: wheat;
       }
       .text-uppercase{
           color: wheat;
       }
       .bg-light{
           background: none !important;
       }
    </style>
</head>
<body>



<!------ Include the above in your HEAD tag ---------->

<div class="container" style="background-image: url(https://feceurgo.sirv.com/Images/form-background-1024x683.jpg)" >


    <div class="kpx_login" >
        <h3 class="kpx_authTitle"><a href="{{route('page.home')}}">Home </a> Login or <a href="{{route('page.showRegister')}}">Sign up</a></h3>
        <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
            <div class="col-xs-2 col-sm-2">
                <a href="#" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="fa fa-facebook fa-2x"></i>
                    <span class="hidden-xs"></span>
                </a>
            </div>
            <div class="col-xs-2 col-sm-2">
                <a href="#" class="btn btn-lg btn-block kpx_btn-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                    <i class="fa fa-twitter fa-2x"></i>
                    <span class="hidden-xs"></span>
                </a>
            </div>
            <div class="col-xs-2 col-sm-2">
                <a href="{{ url('/google') }}" class="btn btn-lg btn-block kpx_btn-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus">
                    <i class="fa fa-google-plus fa-2x"></i>
                    <span class="hidden-xs"></span>
                </a>
            </div>
        </div><br>



        <div class="row kpx_row-sm-offset-3 kpx_loginOr">
            <div class="col-xs-12 col-sm-6">
                <hr class="kpx_hrOr">
                <span class="kpx_spanOr">or</span>
            </div>
        </div>

        <div class="row kpx_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <form class="kpx_loginForm" action="" autocomplete="off" method="POST">
                    @csrf
                    <div class="input-group">
                        <div>
                        <span class="input-group-addon" >
                                <svg style="margin-top: 10px;margin-right: 10px;color:wheat" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16 ">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                            </svg>
                            </span>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                    </div>
                    <div class="alert_error">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
                    <hr />

                    <div class="input-group">
                        <div class="icon-EYE">
                        <span class="input-group-addon"><span><i style="margin-top: 10px;margin-right: 10px;color:wheat"
                                                                 id="icon-eye" class="fa fa-eye-slash"></i></span></span>
                        </div>
                        <input type="password" class="form-control @error('password') is-valid @enderror" id="password" name="password" placeholder="Password">

                    </div>

                    <div class="alert_error">
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <hr />
                    <hr>
                    <div>
                        @if (session('error'))
                            <div class="alert alert-success" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-lg btn-outline-primary btn-block" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                </form>

                <p style="height: 50px"></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted bg-light">
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
        >
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i> WorksWeb
                        </h6>
                        <p>
                            Trade your youth for a good job !
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i>  Nam Từ Liêm, Hà Nội, Việt Nam</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            cuongcoi9001th@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 84 395 230 846</p>
                        <p><i class="fas fa-print me-3"></i> + 84 395 230 846</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          {{--  © 2021 Copyright:--}}
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">{{--MDBootstrap.com--}}</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>

<script>
   $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $(document).ready(function (){
        $('.icon-EYE').click(function (){
            let typeVale= $('#password').attr('type');
            typeVale=(typeVale==='password') ? 'text' : 'password';
            $('#password').attr('type',typeVale);
            let classIconEye = (typeVale==='password') ? 'fas fa-eye-slash' : 'fas fa-eye';
            $('#icon-eye').removeClass();
            $('#icon-eye').addClass(classIconEye);
        })
    })


</script>
</body>
</html>
