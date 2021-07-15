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
            <h1>{{ $item->location }}</h1>
            <p>{{ $item->title }}</p>
            @if($item->galleries->count())
            <div class="gallery">
              <div class="xzoom-containe">
                <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
              </div>
              <div class="xzoom-thumbs">
                @foreach($item->galleries as $galleri)
                <a href="{{ Storage::url($galleri->image) }}">
                  <img src="{{ Storage::url($galleri->image) }}" class="xzoom-gallery" width="124" xpreview="{{ Storage::url($galleri->image) }}">
                </a>
                @endforeach
              </div>
            </div>
            @endif
            <h2>tentang wisata</h2>
            <p>{!! $item->about !!}</p>

            <div class="featured row">
              <div class="col-md-4">
                <img src="{{ url('./frontend/images/logo/ana.png') }}" alt="" class="features-image">
                <div class="description">
                  <h3>featured Event</h3>
                  <p>{{ $item->featured_event }}</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="{{ url('./frontend/images/logo/ana.png') }}" alt="" class="features-image">
                <div class="description">
                  <h3>language</h3>
                  <p>{{ $item->language }}</p>
                </div>
              </div>
              <div class="col-md-4 border-left">
                <img src="{{ url('./frontend/images/logo/ana.png') }}" alt="" class="features-image">
                <div class="description">
                  <h3>foods</h3>
                  <p>{{ $item->foods }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Member Are going</h2>
            <div class="members my-2">
              <img src="{{ url('./frontend/images/testimonial.jpg') }}" class="member-image mr-1 rounded-circle">
              <img src="{{ url('./frontend/images/testimonial.jpg') }}" class="member-image mr-1 rounded-circle">
              <img src="{{ url('./frontend/images/testimonial.jpg') }}" class="member-image mr-1 rounded-circle">
              <img src="{{ url('./frontend/images/testimonial.jpg') }}" class="member-image mr-1 rounded-circle">
            </div>
            <hr>
            <h2>Trip information</h2>
            <table class="trip-information">
              <tr>
                <th width="50%">Date Of Departure</th>
                <td width="50%" class="text-right">
                  {{ \Carbon\Carbon::create($item->departure_date)->format('f, m, Y') }}
                </td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width="50%" class="text-right">
                  {{ $item->duration }}
                </td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width="50%" class="text-right">
                  {{ $item->type }}
                </td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width="50%" class="text-right">
                  $ {{ $item->price }} / person
                </td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            @auth
            <form action="" method="POST">
              <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">Checkout</button>
            </form>
            @endauth
            @guest
            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">Login Or Register to Join</a>
            @endguest
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