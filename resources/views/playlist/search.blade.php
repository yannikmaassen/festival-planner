@extends('layouts/app_nav')

@section('content')
<div class="container">
  <h2 class="text-white text-center mt-3">Playlist hinzufügen</h2>
  <form class="form-inline my-4 my-lg-0" method="GET" action="{{ route('searchResultsPlaylist', $currentPlanner) }}">
    @csrf
    <div class="input-group input-group-sm">
      <input name="q" id="input_playlist" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Suche nach deinen Spotify-Playlisten">
      <div class="input-group-append">
        <button type="submit" class="btn btn-secondary btn-number">
          Suche
        </button>
      </div>
    </div>
  </form>
  <div class="row">
    <a class="btn btn-secondary" href="{{ url()->previous() }}">Abbrechen</a>
  </div>
</div>
@endsection