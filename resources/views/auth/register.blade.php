@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="register-box">
            <div class="register-logo">
                <img src="{{ $app_setting->logo }}" height="120px" alt="">
            </div>
          
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
              <div class="card-body register-card-body">
                <p class="login-box-msg">Register</p>
          
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                  <div class="input-group mb-3">

                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror

                  </div>

                  <div class="input-group mb-3">

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                  </div>

                  <div class="input-group mb-3">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                  </div>

                  <div class="input-group mb-3">

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">

                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    {{-- <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                         I agree to the <a href="#">terms</a>
                        </label>
                      </div>
                    </div> --}}
                    <!-- /.col -->
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary btn-block"> {{ __('Register') }}</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
          
                {{-- <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                  </a>
                  <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                  </a>
                </div> --}}
          
                <a href="{{ route('login') }}" class="text-center">I already have a account. Sign-in</a>
              </div>
              <!-- /.form-box -->
            </div><!-- /.card -->
          </div>
          <!-- /.register-box -->

    </div>

</div>
@endsection
