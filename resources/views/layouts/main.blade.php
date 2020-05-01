<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Day Bootstrap Template - Index</title>
        <meta content="" name="descriptison">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="../assets/img/favicon.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('css/app.css') }}"" rel="stylesheet">
        <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css') }}"" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

        </head>

        <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo mr-auto"><img src="https://cdainterview.com/rw_common/images/bemo-logo2.png" width="167" alt="BeMo logo" class="img-fluid"/></a>

            <nav class="nav-menu d-none d-lg-block ">
                <ul class="">
                <li class="active"><a href="{{ url('/') }}">Main</a></li>
                <li><a href="#">How To Prepare</a></li>
                <li><a href="#">CDA Interview Questions</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </nav><!-- .nav-menu -->

            </div>
        </header><!-- End Header -->
    

    @yield('content')

    <!--= Footer ======= -->
        <footer id="footer">
            <div class="container copyright">
                &copy; 2013-2016 BeMo Academic Consulting Inc. All rights reserved. . <a href="http://www.cdainterview.com/disclaimer-privacy-policy.html"target="_blank"><span style="text-decoration:underline;">Disclaimer & Privacy Policy</span></a>
            </div>
        </footer><!-- End Footer -->
        <a href="#" class="back-to-top" style="display: inline;"><i class="icofont-long-arrow-up"></i></a>

        <!-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/venobox/venobox.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js')}}"></script>

    </body>
    </html>

</html>
