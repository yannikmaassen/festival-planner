@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="box__general">
    <h2 class="box__general--heading mt-3">Artist hinzufügen</h2>
    <form method="GET" action="{{ route('searchResultsArtist', $profile) }}">
      @csrf
      <div class="search">
        <input name="q_artist" type="text" class="searchTerm" placeholder="Suche...">
        <button type="submit" class="searchButton">
          <svg class="bi bi-search" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </form>
    <a class="btn-back" href="{{ route('profile.show', $profile) }}">
      <svg class="bi bi-chevron-left mr-2" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z" clip-rule="evenodd" />
      </svg>
      Zurück zum Profil</a>
  </div>
</div>
@endsection