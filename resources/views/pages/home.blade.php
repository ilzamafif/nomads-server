@extends('layouts.app')

@section('title')
Nomads
@endsection

@section('content')
<!-- start header -->
<header class="text-center">
  <h1>
    Explore The Beautiful World <br> As Easy One Click
  </h1>
  <p class="mt-3">
    You will see Beautiful <br> moment you never see before
  </p>
  <a href="#popularContent" class="btn btn-started px-4 mt-4">Get Started</a>
</header>
<!-- end header -->

<!-- contentt -->
<main>
  <!-- stats -->
  <div class="container">
    <section class="section-stats row justify-content-center" id="stats">
      <div class="col-md-2 col-3 stats-detail">
        <h2>20K</h2>
        <p>Members</p>
      </div>
      <div class="col-md-2 col-3 stats-detail">
        <h2>12</h2>
        <p>Countries</p>
      </div>
      <div class="col-md-2 col-3 stats-detail">
        <h2>5K</h2>
        <p>Hotel</p>
      </div>
      <div class="col-md-2 col-3 stats-detail">
        <h2>72</h2>
        <p>Partners</p>
      </div>
    </section>
  </div>
  <!-- end stats -->

  <!-- start wisata populer -->
  <section class="section-popular" id="popular">
    <div class="container">
      <div class="row">
        <div class="col text-center section-popular-heading">
          <h2>Wisata Popular</h2>
          <p>Somthing that you never try <br> before in this world</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end wisata populer -->

  <!-- start popular content -->
  <section class="section-popular-content" id="popularContent">
    <div class="container">
      <section class="section-travel row justify-content-center">
        @foreach($items as $item)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
            <div class="travel-country">{{ $item->location }}</div>
            <div class="travel-location">{{ $item->title }}</div>
            <div class="travel-button mt-auto">
              <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4 ">View Details</a>
            </div>
          </div>
        </div>
        @endforeach
      </section>
    </div>
  </section>
  <!-- end popular content -->

  <!-- network -->
  <section class="section-network">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Our Network</h2>
          <p>Copanies are trusted us <br> more than just a trip</p>
        </div>
        <div class="col-md-2 text-center">
          <img src="frontend/images/logo/ana.png" alt="">
        </div>
        <div class="col-md-2 text-center">
          <img src="frontend/images/logo/shangri-la.png" alt="">
        </div>
        <div class="col-md-2 text-center">
          <img src="frontend/images/logo/disney.png" alt="">
        </div>
        <div class="col-md-2 text-center">
          <img src="frontend/images/logo/visa.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- end network -->

  <!-- start testimonial heading -->
  <section class="section-testimonial-heading" id="testimonialHeading">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>They Are Loving Us</h2>
          <p>Moments were giving then <br> the best experience</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end testimonial heading -->

  <!-- start testimonial content -->
  <section class="section-testimonial-content" id="testimonialContent">
    <div class="container">
      <div class="section-testimonial-travel row justify-content-center">

        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="./frontend/images/testimonial-1.png" class="mb-4 rounded-circle" width="200px">
              <h3 class="mb-4">Ilzam Afif</h3>
              <p class="testimonial"> “ It was glorious and I could not stop to say wohooo for
                every single moment Dankeeeeee “</p>
            </div>
            <hr>
            <p class="trip-to mt-2">
              Trip to Uhud
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="./frontend/images/testimonial-3.png" class="mb-4 rounded-circle" width="200px">
              <h3 class="mb-4">Ilzam Afif</h3>
              <p class="testimonial"> “ The trip was amazing and I saw something beautiful in that
                Island that makes me want to learn more “</p>
            </div>
            <hr>
            <p class="trip-to mt-2">
              Trip to Karimun Jawa
            </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-testimonial text-center">
            <div class="testimonial-content">
              <img src="./frontend/images/testimonial-2.png" class="mb-4 rounded-circle" width="200px">
              <h3 class="mb-4">Ilzam Afif</h3>
              <p class="testimonial">“ I loved it when the waves was shaking harder — I was
                scared too “</p>
            </div>
            <hr>
            <p class="trip-to mt-2">
              Trip to Nusa Paninda
            </p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
          <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end testimonial content -->
</main>
<!-- end contentt -->
@endsection