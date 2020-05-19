@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section class="mb-4">
    <img class="auth__image mt-3" src="{{ $currentPlanner->getImageAttribute($currentPlanner->planner_image) }}" alt="Festival-Szenerie">
    <div class="row">
      <h1 class="text-white mt-3 ml-3">{{ $currentPlanner->festival->festival_name }}</h1>
    </div>
    <div class="row justify-content-around align-items-center">
      <p class="mr-5">{{ $currentPlanner->festival->start_date }} - {{ $currentPlanner->festival->end_date }}</p>
      <a href="{{ route('planner.edit', $currentPlanner) }}" class="btn btn__edit-planner ml-4 mb-3">Bearbeiten</a>
    </div>

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
    <a class="btn btn-primary mb-4 w-100" href="{{ route('playlist.search') }}">
      {{ __('Füge hier Eure Festival-Playlisten ein!') }}
    </a>
  </section>
</div>
@endsection