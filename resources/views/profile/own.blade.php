@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-4">
    <img class="profile__image" src="/images/people-at-concert.jpg" alt="Profilbild">
    <p class="h2">Yannik<br>
      Maaßen</p>
  </div>
  <a class="btn btn__edit-profile mb-4" href="/profile/edit">Profil bearbeiten</a>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn__edit-profile mb-4">Logout</button>
  </form>
  <section>
    <h3 class="profile__section--heading">Beschreibung</h3>
    <p class="profile__section">
      Yannik / Sanji<br>
      Hamburg 040<br>
    </p>
  </section>
  <hr>
  <section>
    <h3 class="profile__section--heading">Platzhalter Musik</h3>
    <p class="profile__section">Hier werden mithilfe der Spotify API alle Musiknennungen des Users aufgelistet.</p>
  </section>
  <hr>
  <section>
    <h3 class="profile__section--heading">Bisherige Festivals</h3>
    <span class="badge badge__style">Rock am Ring</span>
    <span class="badge badge__style">Deichbrand Festival</span>
    <span class="badge badge__style">Highfield Festival</span>
    <span class="badge badge__style">Tomorrowland</span>
    <span class="badge badge__style">Glastonbury Festival</span>
  </section>
  <hr>
  <section>
    <h3 class="profile__section--heading">Meine Packliste</h3>
    <p class="profile__section">
      - Tageslinsen<br>
      - Panzertape<br>
      - neues Zelt<br>
      - Klopapier<br>
      - Wasser<br>
      - Bier<br>
      - Knabberkram<br>
    </p>
  </section>
</div>
@endsection