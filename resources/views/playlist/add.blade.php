@extends('layouts/app_nav')

@section('content')
<div class="container">
  <h2 class="text-white text-center mt-3">Playlist hinzufügen</h2>
  <div class="form-group">
    <label class="label--form mt-3" for="playlist_input">Füge hier deine Spotify-Playlist ein, die du mit deiner Crew erstellen und bearbeiten kannst.</label>
    <textarea class="form-control" id="playlist_input" rows="12" placeholder="PLatzhalter für eine Ansicht durch die Spotify API"></textarea>
  </div>
  <button type="submit" class="btn btn-primary my-3 w-100" href="{{ url('/planner') }}">
    {{ __('Speichern') }}
  </button>
</div>
@endsection