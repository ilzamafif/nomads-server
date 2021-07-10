<!doctype html>
<html lang="en" />

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.min.css') }}" />
  <!-- font Awesome CSS -->
  <link rel="stylesheet" type="text/css" href="{{ url('frontend/libraries/fontawesome/fontawesome-all.min.css') }}" />
  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="{{ url('frontend/styles/main.css') }}" />

  <title>@yield('title')</title>
</head>

<body>

  <!--start navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#">
        <img src="frontend/images/logo_nomads.png" alt="logo NOMADS">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Paket Travel</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
              Services
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-item" href="#">VISA</div>
              <div class="dropdown-item" href="#">PASPORT</div>
            </div>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Testimonial</a>
          </li>
        </ul>

        <!-- mobile button -->
        <form action="" class="form-inline d-sm-block d-md-none">
          <button type="button" class="btn btn-primary btn-login my-2 my-sm-0 px-4">Masuk</button>
        </form>

        <!-- dekstop button -->
        <form action="" class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button type="button" class="btn btn-primary btn-login btn-navbar-right my-2 my-sm-0 px-4">Masuk</button>
        </form>
      </div>
    </nav>
  </div>
  <!-- end navbar -->

  @yield('content')

  <!-- start footer -->
  <footer class="section-footer mt-5 mb-4 border-top">
    <div class="container pt-5 pb-5">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-lg-3">
              <h5>FEATURES</h5>
              <ul class="list-unstyled">
                <li><a href="#">Review</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Social Media kit</a></li>
                <li><a href="#">Affiliate</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>ACCOUNT</h5>
              <ul class="list-unstyled">
                <li><a href="#">Refund</a></li>
                <li><a href="#">Securiti</a></li>
                <li><a href="#">Reward</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>COMPANY</h5>
              <ul class="list-unstyled">
                <li><a href="#">Career</a></li>
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Media</a></li>
              </ul>
            </div>
            <div class="col-12 col-lg-3">
              <h5>GET CONNECTED</h5>
              <ul class="list-unstyled">
                <li><a href="#">Temanggung</a></li>
                <li><a href="#">Indonesia</a></li>
                <li><a href="#">0895 0951 0938</a></li>
                <li><a href="#">support@nomads.co.id</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row border-top justify-content-center pt-4">
        <div class="col-auto text-gray-500 font-weight-light">
          2021 Copyright Nomads | All Right Reserved | made in temanggung
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->


  <!-- jQuery -->
  <script src="{{ url('frontend/libraries/jquery/jQuery-3.5.1.min.js') }}"></script>
  <!-- popper -->
  <script src="{{ url('frontend/libraries/popper/popper.min.js') }}"></script>
  <!-- Bootstrap js -->
  <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- retina js -->
  <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script>
</body>

</html>