@extends('layouts.app')

@section('content')
<!-- <img class="image--auth" src="/images/blog_festival_Main.jpg" alt="Bild von einer Festival-Szene"> -->
<div class="container">
  <div class="row justify-content-center">
    <h1 class="logo--auth mt-4 mb-2">Planival</h1>
  </div>
  <p class="h2 text-center mt-2 mb-5">Verwalte deine Festivals!</p>
  <p class="h6 text-center mt-3">Bitte logge dich ein, um fortzufahren.</p>


  <div class="row justify-content-center mt-3 mb-5">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header h4 text-center">{{ __('Login') }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row mb-0">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail-Addresse') }}</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Passwort') }}</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <a type="submit" class="btn btn-primary" href="{{ url('/profile/create') }}">
                  {{ __('Login') }}
                </a>
                <!-- 
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Passwort vergessen?') }}
                </a>
                @endif -->
                <a class="btn btn-link" href="{{ url('/register') }}">
                  {{ __('Noch keinen Account? Registrieren') }}
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- <div class="col align-items-center">
        <p>Copyright Yannik Maaßen</p>
        <a class="auth--footer" href="#">Impressum</a> -->
    </div>
  </div>
</div>
</div>
@endsection