@extends('layouts.checkout-success')

@section('title')
Checkout Sukses
@endsection

@section('content')
<!-- start content -->
<main>
  <section class="section-success d-flex align-items-center">
    <div class="col text-center">
      <img src="{{ url('frontend/images/success-checkout.png') }}" class="success-image">
      <h1>Yay Sukses</h1>
      <p>We've sent yau email for trip instruction <br> please read it is well</p>
      <a href="index.html" class="btn btn-home-page mt-3 px-5">home page</a>
    </div>
  </section>
</main>
<!-- end content -->
@endsection