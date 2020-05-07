@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-4">
    <img class="image--profile" src="/images/people-at-concert.jpg" alt="Profilbild">
    <p class="h2">Yannik<br>
      Maaßen</p>
  </div>
  <section>
    <h3 class="row profile--element__heading justify-content-center">Beschreibung</h3>
    <p class="profile-element">
      Yannik / Sanji<br>
      Hamburg 040<br>
      auf der Suche nach weiteren Festivalgängern<br>
    </p>
  </section>
  <hr>
  <section>
    <h3 class="row profile--element__heading justify-content-center">Platzhalter Musik</h3>
    <p class="profile-element">Hier werden mithilfe der Spotify API alle Musiknennungen des Users aufgelistet. So werden Genres oder Interpreten als ein Icon mit dazugehörigem Namen nebeneinander aufgezeigt.</p>
  </section>
  <hr>
  <section>
    <h3 class="row profile--element__heading justify-content-center">Bisherige Festivals</h3>
    <p class="profile-element">
      - Rock am Ring<br>
      - Deichbrand Festival<br>
      - Highfield Festival<br>
      - Tomorrowland<br>
    </p>
  </section>
</div>
@endsection