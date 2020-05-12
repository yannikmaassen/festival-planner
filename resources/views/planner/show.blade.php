@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section class="mb-4">
    <img class="auth__image mt-3" src="/images/blog_festival_Main.jpg" alt="Festival-Szenerie">
    <div class="row justify-content-between align-items-center">
      <h1 class="text-white mt-3 ml-3">Rock am Ring</h1>
      <a href="{{ url('/planner/edit') }}" class="btn btn__edit-planner mr-3">Bearbeiten</a>
    </div>
    <p>05.06.2020-07.06.2020</p>
    <section class="festival-info">
      <h2 class="festival-info__heading">Info</h2>
      <p>Rock - Alternative - Metal</p>
      <p>Green Day - System of a Down - Volbeat</p>
      <p>Rock am Ring ist ein von Marek Lieberberg veranstaltetes Musikfestival, das von 1985 bis 2014 und seit 2017 wieder auf dem Nürburgring in der Nähe der Stadt Adenau in der Eifel stattfindet.</p>
    </section>
  </section>
  <hr>
  <section>
    <h2 class="planner__element--heading">Festivalcrew</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ url('/friends/add') }}">
      {{ __('Füge weitere Crewmember hinzu!') }}
    </a>
  </section>
  <section>
    <h2 class="planner__element--heading">ToDo-Liste</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ url('/todos/add') }}">
      {{ __('Füge ToDos für Dich und Deine Crew hinzu!') }}
    </a>
  </section>
  <section>
    <h2 class="planner__element--heading">Music</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ url('/playlist/add') }}">
      {{ __('Füge hier Eure Festival-Playlisten ein!') }}
    </a>
  </section>
</div>
@endsection