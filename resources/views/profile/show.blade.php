@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-2">
    <img class="profile__image" src="{{ $ownProfile->getImageAttributeProfile($ownProfile->profile_image) }}" alt="Profilbild">
  </div>
  <div class="row justify-content-center align-items-center my-2">
    <p class="h2">{{ $ownProfile->profile_name }}</p>
  </div>
  <div class=" row justify-content-center">
    <a class="btn btn__edit-profile mb-4" href="{{ route('profile.edit', $ownProfile) }}">Profil bearbeiten</a>
  </div>
  <section>
    <h3 class="profile__section--heading">Beschreibung</h3>
    <p class="profile__section">
      {{ $ownProfile->profile_description }}
    </p>
  </section>
  <hr>
  <section>
    <h3 class="profile__section--heading">Meine Lieblingsinterpreten</h3>
    <img src="" alt="">Platzhalter Bild Interpret
    <span>Platzhalter Name Interpret</span>
    <a class="btn btn-primary mb-4 w-100" href="{{ route('artist.search') }}">
      {{ __('Füge deine Lieblingsartists hinzu!') }}
    </a>
  </section>
  <hr>
  <section>
    <h3 class="profile__section--heading">Mein Lieblingsfestival</h3>
    <span class="badge badge__style">{{ $festival->festival_name }}</span>
  </section>
  <hr>
  <section>
    <h3 class="profile__section--heading">Meine Packliste</h3>
    <pre class="profile__section">
    {{ $ownProfile->profile_list }}
    </pre>
  </section>
  <div class="row justify-content-center">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button class="btn btn__logout mb-3 mt-4">Logout</button>
    </form>
  </div>
</div>
@endsection