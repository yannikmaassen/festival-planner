@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-around align-items-center my-4">
    <img class="image--profile" src="/images/icon.png" alt="Profilbild Yannik Maaßen">
    <p class="h3">Yannik Maaßen</p>
  </div>
  <a class="btn btn--edit-profile mb-3" href="/profile/edit">Profil bearbeiten</a>
  <section class="profile-element">
    <h4 class="text-white">Beschreibung</h4>
    <p class="text-white">Hier steht die Beschreibung, welche der Nutzer über den create oder edit view selber editieren kann.</p>
  </section>
  <section class="profile-element">
    <h4 class="text-white">Platzhalter Musik</h4>
    <p class="text-white">Hier werden mithilfe der Spotify API alle Musiknennungen des Users aufgelistet. So werden Genres oder Interpreten als ein Icon mit dazugehörigem Namen nebeneinander aufgezeigt.</p>
  </section>
  <section class="profile-element">
    <h4 class="text-white">Bisherige Festivals</h4>
    <p class="text-white">Hier sind die bisherigen Festivals des Nutzers aufgeführt.</p>
  </section>
  <section class="profile-element">
    <h4 class="text-white">Deine Packliste</h4>
    <p class="text-white">Hier sind die persönlichen Mitbringsel des Nutzers aufgelistet.</p>
  </section>
</div>
@endsection