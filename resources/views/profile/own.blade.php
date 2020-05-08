@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-4">
    <img class="image--profile" src="/images/people-at-concert.jpg" alt="Profilbild">
    <p class="h2">Yannik<br>
      Maaßen</p>
  </div>
  <a class="btn btn--edit-profile mb-4" href="/profile/edit">Profil bearbeiten</a>
  <!-- <hr> -->
  <section>
    <h3 class="profile--element__heading">Beschreibung</h3>
    <p class="profile-element">
      Yannik / Sanji<br>
      Hamburg 040<br>
      auf der Suche nach weiteren Festivalgängern<br>
    </p>
  </section>
  <hr>
  <section>
    <h3 class="profile--element__heading">Platzhalter Musik</h3>
    <p class="profile-element">Hier werden mithilfe der Spotify API alle Musiknennungen des Users aufgelistet. So werden Genres oder Interpreten als ein Icon mit dazugehörigem Namen nebeneinander aufgezeigt.</p>
  </section>
  <hr>
  <section>
    <h3 class="profile--element__heading">Bisherige Festivals</h3>
    <span class="badge badge__style">Rock am Ring</span>
    <span class="badge badge__style">Deichbrand Festival</span>
    <span class="badge badge__style">Highfield Festival</span>
    <span class="badge badge__style">Tomorrowland</span>
    <span class="badge badge__style">Glastonbury Festival</span>
  </section>
  <hr>
  <section>
    <h3 class="profile--element__heading">Meine Packliste</h3>
    <p class="profile-element">
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