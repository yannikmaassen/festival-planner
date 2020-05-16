@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section class="mb-4">
    <img class="auth__image mt-3" src="/images/blog_festival_Main.jpg" alt="Festival-Szenerie">
    <div class="row justify-content-between align-items-center">
      <h1 class="text-white mt-3 ml-3">{{ $currentPlanner->festival->festival_name }}</h1>
      <a href="{{ url('/planner/edit') }}" class="btn btn__edit-planner mr-3">Bearbeiten</a>
    </div>
    <p>{{ $currentPlanner->festival->start_date }} - {{ $currentPlanner->festival->end_date }}</p>
    <section class="festival-info">
      <h2 class="festival-info__heading">Info</h2>
      <p>{{ $currentPlanner->festival->genres }}</p>
      <p>{{ $currentPlanner->info_text }}</p>
    </section>
  </section>
  <hr>
  <section>
    <h2 class="planner__element--heading">Festivalcrew</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ route('friends.add') }}">
      {{ __('Füge weitere Crewmember hinzu!') }}
    </a>
  </section>
  <section>
    <h2 class="planner__element--heading">ToDo-Liste</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ route('todos.add') }}">
      {{ __('Füge ToDos für Dich und Deine Crew hinzu!') }}
    </a>
  </section>
  <section>
    <h2 class="planner__element--heading">Music</h2>
    <a class="btn btn-primary mb-4 w-100" href="{{ route('playlist.add') }}">
      {{ __('Füge hier Eure Festival-Playlisten ein!') }}
    </a>
  </section>
</div>
@endsection