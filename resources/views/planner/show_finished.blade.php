@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section class="mb-4">
    <img class="auth__image mt-3" src="/images/blog_festival_Main.jpg" alt="Festival-Szenerie">
    <div class="row justify-content-between align-items-center">
      <h1 class="text-white mt-3 ml-3">Rock am Ring</h1>
      <a href="{{ url('/planner/edit') }}" class="btn btn__edit-planner mr-3">Bearbeiten</a>
    </div>
    <p>05.06.-07.06.2020</p>
    <section class="festival-info">
      <h2 class="festival-info__heading">Info</h2>
      <p>Rock - Alternative - Metal</p>
      <p>Green Day - System of a Down - Volbeat</p>
      <p>Rock am Ring ist ein von Marek Lieberberg veranstaltetes Musikfestival, das von 1985 bis 2014 und seit 2017 wieder auf dem Nürburgring in der Nähe der Stadt Adenau in der Eifel stattfindet.</p>
    </section>
  </section>
  <hr>
  <section class="mb-5">
    <div class="row justify-content-between align-items-center">
      <h2 class="text-white ml-3">Festivalcrew</h2>
      <a href="{{ url('/friends/edit') }}" class="btn btn__edit-planner mr-3">Bearbeiten</a>
    </div>
    <a href="{{ ('/profile/own') }}" class="badge badge__style--own">Yannik</a>
    <a href="{{ ('/profile/other') }}" class="badge badge__style">Maik</a>
    <a href="{{ ('/profile/other') }}" class="badge badge__style">Mats</a>
    <a href="{{ ('/profile/other') }}" class="badge badge__style">Annika</a>
    <a href="{{ ('/profile/other') }}" class="badge badge__style">Hannah</a>
    <a href="{{ ('/profile/other') }}" class="badge badge__style">Ingo</a>
    <a href="{{ ('/profile/other') }}" class="badge badge__style">Peter</a>
  </section>
  <section>
    <div class="row justify-content-between align-items-center">
      <h2 class="text-white ml-3">ToDo-Liste</h2>
      <a href="{{ url('/todos/edit') }}" class="btn btn__edit-planner mr-3">Bearbeiten</a>
    </div>
    <p class="profile__section mb-5">- Pavillon kaufen<br>
      - Festivalkarten ausdrucken<br>
      - Musikbox mitnehmen<br>
      - Anhänger präparieren<br>
      - Sonnencreme für die Fahrt einpacken<br>
      - Verpflegung einkaufen<br>
    </p>
  </section>
  <section>
    <div class="row justify-content-between align-items-center">
      <h2 class="text-white ml-3">Music</h2>
      <a href="{{ url('/playlist/edit') }}" class="btn btn__edit-planner mr-3 mb-2">Bearbeiten</a>
    </div>
    <div class="box mb-3">Platzhalter für eine Übersicht über die Spotify-Playlisten</div>
  </section>
</div>
@endsection