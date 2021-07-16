@extends('layouts.app')

@section('content')
<!-- start content -->
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">We Explore the live <br> live much better</h1>
                <img src="" alt="" class="w-70 d-none d-md-flex">
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="./frontend/images/logo.png" alt="" class="w-50 mb-4">
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-label-input" name="remeber-me" id="remeber-me">
                                <label for="remeber-me" class="form-check-label">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-block btn-login">{{ __('Login') }}</button>
                            <p class="text-center mt-3">
                                <a href="">lupa password</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- end content -->

@endsection