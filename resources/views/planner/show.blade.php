@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section>
    <img class="image--auth mt-3" src="/images/blog_festival_Main.jpg" alt="Bild einer Festival-Szene">
    <h1 class="text-white mt-3">Rock am Ring</h1>
    <p><small>05.06.-07.06.2020</small></p>
    <p>Rock - Alternative - Metal</p>
    <p>Green Day - System of a Down - Volbeat</p>
    <p>Rock am Ring ist ein von Marek Lieberberg veranstaltetes Musikfestival, das von 1985 bis 2014 und seit 2017 wieder auf dem Nürburgring in der Nähe der Stadt Adenau in der Eifel stattfindet.</p>
  </section>
  <hr>
  <section>
    <h2 class="row planner--element__heading justify-content-center">Festivalcrew</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ url('/friends/add') }}">
      {{ __('Füge weitere Crewmember hinzu!') }}
    </a>
  </section>
  <section>
    <h2 class="row planner--element__heading justify-content-center">ToDo-Liste</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ url('/todos/add') }}">
      {{ __('Füge ToDos für Dich und Deine Crew hinzu!') }}
    </a>
  </section>
  <section>
    <h2 class="row planner--element__heading justify-content-center">Music</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ url('/playlist/add') }}">
      {{ __('Füge hier Eure Festival-Playlisten ein!') }}
    </a>
  </section>
</div>
@endsection