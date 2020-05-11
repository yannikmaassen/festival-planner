@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <h1 class="logo__auth mt-4 mb-2">Planival</h1>
  </div>
  <p class="h2 text-center mt-2 mb-5">Verwalte deine Festivals!</p>
  <p class="h6 text-center mt-3">Bitte registriere dich, um fortzufahren.</p>

  <div class="row justify-content-center mt-3 mb-5">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header h4 text-center">{{ __('Registrieren') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row mb-0">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User-Name') }}</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail-Addresse') }}</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Passwort') }}</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row mb-0">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Passwort bestätigen') }}</label>
              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <a type="submit" class="btn btn-primary" href="{{ url('/profile/create') }}">
                  {{ __('Registrieren') }}
                </a>
                <a class="btn btn-link" href="{{ url('/login') }}">
                  {{ __('Bereits registriert? Login') }}
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection