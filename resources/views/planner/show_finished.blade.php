@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section>
    <img class="image--auth mt-3" src="/images/blog_festival_Main.jpg" alt="Bild einer Festival-Szene">
    <div class="row justify-content-between align-items-center">
      <h1 class="text-white mt-3 ml-3">Rock am Ring</h1>
      <a href="{{ url('/planner/edit') }}" class="btn btn--edit__planner mr-3">Bearbeiten</a>
    </div>
    <p><small>05.06.-07.06.2020</small></p>
    <p>Green Day, System of a Down, Volbeat</p>
    <p>Rock am Ring ist ein von Marek Lieberberg veranstaltetes Musikfestival, das von 1985 bis 2014 und seit 2017 wieder auf dem Nürburgring in der Nähe der Stadt Adenau in der Eifel stattfindet.</p>
  </section>
  <hr>
  <section>
    <div class="row justify-content-between align-items-center">
      <h2 class="text-white ml-3">Festivalcrew</h2>
      <a href="{{ url('/friends/edit') }}" class="btn btn--edit__planner mr-3">Bearbeiten</a>
    </div>
    <a href="/profile/own"><img src="/images/icon.png" alt="">
      <p>Yannik Maaßen</p>
    </a>
  </section>
  <section>
    <div class="row justify-content-between align-items-center">
      <h2 class="text-white ml-3">ToDo-Liste</h2>
      <a href="{{ url('/todos/edit') }}" class="btn btn--edit__planner mr-3">Bearbeiten</a>
    </div>
    <p>- Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
    </p>
  </section>
  <section>
    <div class="row justify-content-between align-items-center">
      <h2 class="text-white ml-3">Music</h2>
      <a href="{{ url('/playlist/edit') }}" class="btn btn--edit__planner mr-3 mb-2">Bearbeiten</a>
    </div>
    <div class="box mb-3">Platzhalter für eine Übersicht über die Spotify-Playlisten</div>
  </section>
</div>
@endsection