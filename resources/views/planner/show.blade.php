@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section class="mb-4">
    <img class="auth__image mt-3" src="{{ $currentPlanner->getImageAttributePlanner($currentPlanner->planner_image) }}" alt="Festival-Szenerie">
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
      <p class="h5">{{ $currentPlanner->info_text }}</p>
    </section>
  </section>
  <hr>
  <section>
    <h2 class="planner__element--heading">Festivalcrew</h2>
    @if(count($users) >= 1)
    <a href="{{ route('friends.edit', $currentPlanner) }}" class="btn btn__edit-planner mb-2">Bearbeiten</a>
    @foreach($users as $user)
    <a class="badge badge__style mb-3 w-100" href="{{ route('profile.show', $currentPlanner) }}">
      {{ $user->profile->profile_name }}
    </a>
    @endforeach
    @else
    <a class="btn btn-primary mb-4 w-100" href="{{ route('friends.add', $currentPlanner) }}">
      {{ __('Füge weitere Crewmember hinzu!') }}
    </a>
    @endif
  </section>
  <section>
    <h2 class="planner__element--heading">ToDo-Liste</h2>
    @if(isset($currentPlanner->todo_list))
    <a href="{{ route('todos.edit', $currentPlanner) }}" class="btn btn__edit-planner mb-2">Bearbeiten</a>
    <pre class="festival-info">{{ $currentPlanner->todo_list }}</pre>
    @else
    <a class="btn btn-primary mb-4 w-100" href="{{ route('todos.add', $currentPlanner) }}">
      {{ __('Füge ToDos für Dich und Deine Crew hinzu!') }}
    </a>
    @endif
  </section>
  <section>
    <h2 class="planner__element--heading">Camp-Playlist</h2>
    @if(isset($currentPlanner->playlist_1))
    <a href="{{ route('playlist.search', $currentPlanner) }}" class="btn btn__edit-planner mb-2">Bearbeiten</a>
    <a class="badge badge__style mb-3 w-100" href="{{ $currentPlanner->playlist_1 }}">
      {{ $currentPlanner->playlist_2 }}
    </a>
    @else
    <a class="btn btn-primary mb-4 w-100" href="{{ route('playlist.search', $currentPlanner) }}">
      {{ __('Füge hier Eure Festival-Playlisten ein!') }}
    </a>
    @endif
  </section>
</div>
@endsection