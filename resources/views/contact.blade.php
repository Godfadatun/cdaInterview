
@extends('layouts.main')

@section('content')
    <section id="theContact" class="d-flex align-items-center"></section><!-- End Hero -->

  <!-- ======= About Section ======= -->
    <section id="about" class="">
        <div class="container">

        <span class="theHeader">BeMo Academic Consulting Inc.</span><br>
        <span><u><strong>Toll Free:</strong></u> 1-855-900-BeMo (2366)</span><br>
        <span><u><strong>Email:</strong></u> info@bemoacademicconsulting.com </span>



        </div>
    </section><!-- End About Section -->


    <section id="contact" class="contact">
        <div class="container">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form d-flex justify-content-center flex-column text-center">
            <div class="form-group">
                <label  for="name">Name*</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <label for="name">EMAIL ADDRESS*</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
            <label for="message">HOW CAN WE HELP YOU? *</label>
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
            </div>
            <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="text-center mr-1"><button type="submit">Reset</button></div>
            <div class="text-center ml-1"><button type="submit">Submit</button></div>
            </div>

        </form>
        </div>
    </section><!-- End Contact Section -->
@endsection





{{-- <!DOCTYPE html>
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

      <a href="index.html" class="logo mr-auto"><img src="https://cdainterview.com/rw_common/images/bemo-logo2.png" width="167" alt="BeMo logo" class="img-fluid"/></a>

      <nav class="nav-menu d-none d-lg-block ">
        <ul class="">
          <li class="active"><a href="index.html">Main</a></li>
          <li><a href="#">How To Prepare</a></li>
          <li><a href="#">CDA Interview Questions</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="theContact" class="d-flex align-items-center"></section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="">
      <div class="container">

        <span class="theHeader">BeMo Academic Consulting Inc.</span><br>
        <span><u><strong>Toll Free:</strong></u> 1-855-900-BeMo (2366)</span><br>
        <span><u><strong>Email:</strong></u> info@bemoacademicconsulting.com </span>



      </div>
    </section><!-- End About Section -->


    <section id="contact" class="contact">
      <div class="container">

        <form action="forms/contact.php" method="post" role="form" class="php-email-form d-flex justify-content-center flex-column text-center">
          <div class="form-group">
              <label  for="name">Name*</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
          <div class="form-group">
              <label for="name">EMAIL ADDRESS*</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          <div class="form-group">
            <label for="message">HOW CAN WE HELP YOU? *</label>
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="form-row d-flex justify-content-center">
              <div class="text-center mr-1"><button type="submit">Reset</button></div>
            <div class="text-center ml-1"><button type="submit">Submit</button></div>
          </div>

        </form>
      </div>
    </section><!-- End Contact Section -->



  <!-- ======= Footer ======= -->
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

</html> --}}
