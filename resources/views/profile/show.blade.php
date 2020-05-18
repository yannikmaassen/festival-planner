@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-2">
    <img class="profile__image" src="/images/people-at-concert.jpg" alt="Profilbild">
  </div>
  <div class="row justify-content-center my-2">
    <p class="h2">{{ $ownProfile->profile_name }}</p>
  </div>
  <div class="row justify-content-center">
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
    <h3 class="profile__section--heading">Mein Lieblingsfestival</h3>
    <span class="badge badge__style">{{ $festival->festival_name }}</span>
  </section>
  <hr>
  <section>
    <h3 class="profile__section--heading">Meine Packliste</h3>
    <p class="profile__section">
      {{ $ownProfile->profile_list }}
    </p>
  </section>
  <div class="row justify-content-center">
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button class="btn btn__logout mb-3 mt-4">Logout</button>
    </form>
  </div>
</div>
@endsection