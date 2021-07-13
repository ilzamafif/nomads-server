@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Travel Package</h1>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('gallery.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title">
            </div>
            <div class="form-group">
              <label for="location">location</label>
              <input type="text" id="location" class="form-control" name="location" value="{{ old('location') }}" placeholder="location">
            </div>
            <div class="form-group">
              <label for="about">About</label>
              <textarea name="about" id="about" rows="10" class="d-block w-100 form-control">{{ old('location') }}</textarea>
            </div>
            <div class="form-group">
              <label for="featured_event">Featured Event</label>
              <input type="text" id="featured_event" class="form-control" name="featured_event" value="{{ old('featured_event') }}" placeholder="featured_event">
            </div>
            <div class="form-group">
              <label for="language">Language</label>
              <input type="text" id="language" class="form-control" name="language" value="{{ old('language') }}" placeholder="language">
            </div>
            <div class="form-group">
              <label for="foods">Foods</label>
              <input type="text" id="foods" class="form-control" name="foods" value="{{ old('foods') }}" placeholder="foods">
            </div>
            <div class="form-group">
              <label for="departure_date">Departure Date</label>
              <input type="date" id="departure_date" class="form-control" name="departure_date" value="{{ old('departure_date') }}" placeholder="departure_date">
            </div>
            <div class="form-group">
              <label for="duration">Duration</label>
              <input type="text" id="duration" class="form-control" name="duration" value="{{ old('duration') }}" placeholder="duration">
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" id="type" class="form-control" name="type" value="{{ old('type') }}" placeholder="type">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input price="number" id="price" class="form-control" name="price" value="{{ old('price') }}" placeholder="price">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="button-gallery">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>



</div>
<!-- /.container-fluid -->
@endsection