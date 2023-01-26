@extends('layouts.auth')

@section('content')
  <div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
      <!-- Login basic -->
      <div class="card mb-0">
        <div class="card-body">
          <a href="index.html" class="brand-logo">
            @include('partials.logo')
            <h2 class="brand-text text-primary ms-1">Vuexy</h2>
          </a>

          <h4 class="card-title mb-1">Welcome to Vuexy! 👋</h4>
          <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

          @if ($errors)
            @foreach ($errors as $error)
              <div class="text-danger">
                {{ $error }}
              </div>
            @endforeach
          @endif

          <form class="auth-login-form mt-2" action="{{ route('login.perform') }}" method="POST">
            @csrf
            <div class="mb-1">
              <label for="username" class="form-label">Username or Email</label>
              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                placeholder="john@example.com" aria-describedby="username" tabindex="1" value="{{ old('username') }}" required
                autocomplete="email" autofocus />

              @error('username')
                <div class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </div>
              @enderror
            </div>

            <div class="mb-1">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
                <a href="auth-forgot-password-basic.html">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="input-group input-group-merge form-password-toggle">
                <input id="password" type="password"
                  class="form-control form-control-merge @error('password') is-invalid @enderror" name="password" tabindex="2"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"
                  required autocomplete="current-password" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>

              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-1">
              <div class="form-check">
                <input id="remember-me" class="form-check-input" type="checkbox" tabindex="3" />
                <label class="form-check-label" for="remember-me"> Remember Me </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>
          </form>

          <p class="text-center mt-2">
            <span>New on our platform?</span>
            <a href="auth-register-basic.html">
              <span>Create an account</span>
            </a>
          </p>

          <div class="divider my-2">
            <div class="divider-text">or</div>
          </div>

          <div class="auth-footer-btn d-flex justify-content-center">
            <a href="#" class="btn btn-facebook">
              <i data-feather="facebook"></i>
            </a>
            <a href="#" class="btn btn-twitter white">
              <i data-feather="twitter"></i>
            </a>
            <a href="#" class="btn btn-google">
              <i data-feather="mail"></i>
            </a>
            <a href="#" class="btn btn-github">
              <i data-feather="github"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- /Login basic -->
    </div>
  </div>
@endsection

@section('js')
  <script src="{{ asset('app-assets/js/scripts/pages/auth-login.js') }}"></script>
@endsection
