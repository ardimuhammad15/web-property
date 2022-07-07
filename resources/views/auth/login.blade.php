@extends('layouts.app')

@section('content')

<section class="login p-4 d-flex">
      <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-6">
            <div class="header mb-5">
              <h1>LOGIN</h1>
              <p>Welcome back to your account</p>
            </div>
                 <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Your Email" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror                       
                    </div>
                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Enter Password" name="password" required autocomplete="current-password"/>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="button-login mb-3 text-center">
                       <button type="submit" class="btn btn-danger">{{ __('Login') }}</button>

                    </div>
                    <div class="text-center">
                        <span class="d-inline">Don't have an account? <a href="{{ __('register') }}" class="d-inline text-decoration-none" style="color: red">Sign Up</a></span>
                    </div>
                    </form>
                </div>
          </div>
        </div>
      </div>

      <div class="login-right w-50 h-100">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Assets/img/image-login.svg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Assets/img/image-login2.svg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
    </section>
@endsection
