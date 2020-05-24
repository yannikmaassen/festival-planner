@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-4">
    <img class="profile__image" src="{{ $ownProfile->getImageAttributeProfile($ownProfile->profile_image) }}" alt="Profilbild">
  </div>
  <div class="row justify-content-center align-items-center my-2">
    <p class="h2">{{ $ownProfile->profile_name }}</p>
  </div>
  <section class="profile__section">
    <h4 class="profile__section--heading">Beschreibung</h4>
    <p class="profile__section--description">
      {{ $ownProfile->profile_description }}
    </p>
    <h4 class="profile__section--heading">Lieblingsfestival</h4>
    <div class="favorite-festival">
      <h4> {{ $festival->festival_name }}</h4>
      <p>{{ $festival->genres }}</p>
      <p>{{ $festival->location }}</p>
    </div>
    <h4 class="profile__section--heading">Lieblingsinterpret</h4>
    @if(!is_null($ownProfile->artist_id))
    <div class="favorite-music">
      <a href="{{ $ownProfile->artist_uri }}" class="h4">{{ $ownProfile->artist_name }}</a>
    </div>
    @else
    <a class="btn btn-primary mb-5 w-100" href="{{ route('artist.search', $ownProfile) }}">
      {{ __('Füge deine Lieblingsartists hinzu!') }}
    </a>
    @endif
  </section>
  <section class="profile__section">
    <h4 class="profile__section--heading">Meine Packliste</h4>
    <pre>{{ $ownProfile->profile_list }}</pre>
  </section>
  <hr>
  <div class="row justify-content-around my-4">
    <a class="btn btn__edit-profile" href="{{ route('profile.edit', $ownProfile) }}">
      <svg class="bi bi-pencil-square mr-2" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd" />
      </svg>
      Profil bearbeiten</a>
    <div class="justify-content-center">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn__logout">
          <svg class="bi bi-box-arrow-right mr-2" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 010-.708L14.293 8l-2.647-2.646a.5.5 0 01.708-.708l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h9a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 01.5 12V4A1.5 1.5 0 012 2.5h7A1.5 1.5 0 0110.5 4v1.5a.5.5 0 01-1 0V4a.5.5 0 00-.5-.5H2a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h7a.5.5 0 00.5-.5v-1.5a.5.5 0 011 0V12A1.5 1.5 0 019 13.5H2z" clip-rule="evenodd" />
          </svg>
          Logout
        </button>
      </form>
    </div>
  </div>
</div>
@endsection