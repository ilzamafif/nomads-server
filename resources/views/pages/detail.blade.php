@extends('layouts.app')

@section('title', 'Detail Travel')
@section('content')
<!-- start header -->
<main>
  <section class="section-details-header">
  </section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col px-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Paket travel</li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 pl-lg-0">
          <div class="card card-details">
            <h1>Nusa Paninda</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="gallery">
              <div class="xzoom-containe">
                <img src="./frontend/images/details.jpg" class="xzoom" id="xzoom-default" xoriginal="./frontend/images/details.jpg">
              </div>
              <div class="xzoom-thumbs">
                <a href="./frontend/images/details.jpg">
                  <img src="./frontend/images/details.jpg" class="xzoom-gallery" width="124" xpreview="./frontend/images/details.jpg">
                </a>
                <a href="./frontend/images/detail1.jpg">
                  <img src="./frontend/images/detail1.jpg" class="xzoom-gallery" width="124" xpreview="./frontend/images/detail1.jpg">
                </a>
                <a href="./frontend/images/details.jpg">
                  <img src="./frontend/images/details.jpg" class="xzoom-gallery" width="124" xpreview="./frontend/images/details.jpg">
                </a>
                <a href="./frontend/images/detail1.jpg">
                  <img src="./frontend/images/detail1.jpg" class="xzoom-gallery" width="124" xpreview="./frontend/images/detail1.jpg">
                </a>
                <a href="./frontend/images/details.jpg">
                  <img src="./frontend/images/details.jpg" class="xzoom-gallery" width="124" xpreview="./frontend/images/details.jpg">
                </a>
              </div>
            </div>
            <h2>tentang wisata</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, optio recusandae repudiandae reprehenderit eaque id possimus quaerat aperiam provident corrupti.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum libero omnis in officiis. Obcaecati, eos.</p>

            <div class="featured row">
              <div class="col-md-4">
                <img src="./frontend/images/logo/ana.png" alt="" class="features-image">
                <div class="description">
                  <h3>featured Event</h3>
                  <p>Tari Kecak</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="./frontend/images/logo/ana.png" alt="" class="features-image">
                <div class="description">
                  <h3>language</h3>
                  <p>bahasa Indonesia</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="./frontend/images/logo/ana.png" alt="" class="features-image">
                <div class="description">
                  <h3>foods</h3>
                  <p>Lokal foodes</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Member Are going</h2>
            <div class="members my-2">
              <img src="./frontend/images/testimonial.jpg" class="member-image mr-1 rounded-circle">
              <img src="./frontend/images/testimonial.jpg" class="member-image mr-1 rounded-circle">
              <img src="./frontend/images/testimonial.jpg" class="member-image mr-1 rounded-circle">
              <img src="./frontend/images/testimonial.jpg" class="member-image mr-1 rounded-circle">
            </div>
            <hr>
            <h2>Trip information</h2>
            <table class="trip-information">
              <tr>
                <th width="50%">Date Of Departure</th>
                <td width="50%" class="text-right">22 aug 2021</td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width="50%" class="text-right">40 3N</td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width="50%" class="text-right">Open Trip</td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width="50%" class="text-right">$80,00 / Pesron</td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            <a href="./checkout.html" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- end header -->
@endsection

@push('prepend-style')
<!-- xzoom -->
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<!-- xzoom -->
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}">
</script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomwidth: 500,
      title: false,
      tint: '#333',
      Xoffset: 15,
    });
  });
</script>
@endpush