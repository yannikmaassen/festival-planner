@extends('layouts/app_nav')

@section('content')
<div class="container">
  <a class="btn-back" href="{{ route('artist.search', $profile) }}">
    <svg class="bi bi-chevron-left mr-2" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z" clip-rule="evenodd" />
    </svg>
    Zurück zur Suche</a>
  <div class="row align-items-center justify-content-center">
    <div class="col-md-9">
      <h3 class="my-5 text-center text-white">Suchergebnisse für "{{ $query }}"</h3>
    </div>

  </div>
  <div class="row mb-5 d-flex justify-content-start text-center">
    @foreach($artists as $artist)
    <div class="col-md-3">
      <a href="{{ $artist->uri }}" class="d-block border rounded mb-4 p-0 shadow-sm text-decoration-none bg-dark">
        <h4 class="text-white my-1"><small>Artist-Name</small><br>{{ $artist->name }}</h4>
        <form method="POST" action="{{ route('profile.update', $profile) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <input name="artist_uri" type="hidden" value="{{ $artist->uri }}">
          <input name="artist_href" type="hidden" value="{{ $artist->href }}">
          <input name="artist_id" type="hidden" value="{{ $artist->id }}">
          <input name="artist_name" type="hidden" value="{{ $artist->name }}">
          <button type="submit" class="btn btn-primary my-2">Hinzufügen</button>
        </form>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection