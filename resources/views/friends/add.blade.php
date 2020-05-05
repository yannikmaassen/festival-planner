@extends('layouts/app_nav')

@section('content')
<div class="container">
  <h2 class="text-white mt-3">Freunde hinzufügen</h2>
  <form class="form-inline my-4 my-lg-0" method="GET" action="{{ url('/search') }}">
    @csrf
    <div class="input-group input-group-sm">
      <label for="input_friends" class="label--form">Suche nach Freunden, die auch diese App nutzen.</label>
      <input name="input_friends" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Suche nach User-Name oder E-Mail">
      <div class="input-group-append">
        <button type="submit" class="btn btn-secondary btn-number" href="{{ url('/search') }}">
          Suche
        </button>
      </div>
    </div>
  </form>
</div>
@endsection