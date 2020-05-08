@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-4">
    <img class="image--profile" src="/images/people-at-concert.jpg" alt="Profilbild">
    <p class="h2">Maik<br>
      Peters</p>
  </div>
  <section>
    <h3 class="profile--element__heading">Beschreibung</h3>
    <p class="profile-element">
      Hi, ich bin Maik und ich gehe immer gerne auf Festivals!<br>
    </p>
  </section>
  <hr>
  <section>
    <h3 class="profile--element__heading">Platzhalter Musik</h3>
    <p class="profile-element">Hier werden mithilfe der Spotify API alle Musiknennungen des Users aufgelistet. So werden Genres oder Interpreten als ein Icon mit dazugehörigem Namen nebeneinander aufgezeigt.</p>
  </section>
  <hr>
  <section class="mb-3">
    <h3 class="profile--element__heading">Bisherige Festivals</h3>
    <span class="badge badge__style">Rock am Ring</span>
    <span class="badge badge__style">Deichbrand Festival</span>
    <span class="badge badge__style">Highfield Festival</span>
    <span class="badge badge__style">Tomorrowland</span>
    <span class="badge badge__style">Glastonbury Festival</span>
  </section>
</div>
@endsection