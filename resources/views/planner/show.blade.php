@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section class="mb-4">
    <img class="auth__image mt-3" src="{{ $currentPlanner->getImageAttributePlanner($currentPlanner->planner_image) }}" alt="Festival-Szenerie">

    <div class="planner-element">

      <div class="planner-element__heading">
        <h1>{{ $currentPlanner->festival->festival_name }}</h1>
        <a href="{{ route('planner.edit', $currentPlanner) }}" class="btn btn__edit-planner ml-4 mb-3">
          <svg class="bi bi-pencil-square" width="2.3em" height="2.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <div class="festival-default-info">
        <h4>
          Zeitraum
        </h4><br>
        <p>{{ $currentPlanner->festival->start_date }} - {{ $currentPlanner->festival->end_date }}</p>
        <h4>
          Genres
        </h4><br>
        <p>{{ $currentPlanner->festival->genres }}</p>
      </div>
      <section class="festival-info-text">
        <h4 class="planner-element__heading">Beschreibung</h4>
        <p>{{ $currentPlanner->info_text }}</p>
      </section>
  </section>

  <hr>
  <section class="planner-element">
    <div class="planner-element__heading">
      <h2>Festivalcrew</h2>
      @if(count($users) >= 1)
      <a href="{{ route('friends.add', $currentPlanner) }}" class="btn btn__add-friend">
        <svg class="bi bi-plus-square-fill" width="2.2em" height="2.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2zm6.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd" />
        </svg>
      </a>
      @endif
    </div>
    @if(count($users) >= 1)
    <div class="friend-list">
      @foreach($users as $user)
      <a class="badge crew-badge" href="{{ route('profile.show', $currentPlanner) }}">
        @if(isset($user->profile->profile_name))
        {{ $user->profile->profile_name }}
        @else
        {{ $user->user_name }}
        @endif
        <form method="POST" action="{{ route('planner.update', $currentPlanner) }}">
          @csrf
          @method('PUT')
          <input type="hidden" name="user_id_detach" value="{{ $user->id }}">
          <button class="btn__delete-friend" type="submit">
            <svg class="bi bi-x" width="1.3em" height="1.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd" />
            </svg>
          </button>
        </form>
      </a>
      @endforeach</div>
    @else
    <a class="btn btn-primary mb-4 w-100" href="{{ route('friends.add', $currentPlanner) }}">
      {{ __('Füge weitere Crewmember hinzu!') }}
    </a>
    @endif
  </section>

  <section class="planner-element">
    <div class="planner-element__heading">
      <h2>ToDo-Liste</h2>
      @if(isset($currentPlanner->todo_list))
      <a href="{{ route('todos.edit', $currentPlanner) }}" class="btn btn__edit-todos">
        <svg class="bi bi-pencil-square" width="2.3em" height="2.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd" />
        </svg>
      </a>
      @endif
    </div>
    @if(isset($currentPlanner->todo_list))
    <pre class="festival-info">{{ $currentPlanner->todo_list }}</pre>
    @else
    <a class="btn btn-primary my-3 w-100" href="{{ route('todos.add', $currentPlanner) }}">
      {{ __('Füge ToDos für Dich und Deine Crew hinzu!') }}
    </a>
    @endif
  </section>

  <section class="planner-element">
    <div class="planner-element__heading">
      <h2>Camp-Playlist</h2>
      @if(isset($currentPlanner->playlist_id))
      <a href="{{ route('playlist.search', $currentPlanner) }}" class="btn btn__search-playlist">
        <svg class="bi bi-search" width="2.3em" height="2.3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd" />
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd" />
        </svg>
      </a>
      @endif
    </div>
    @if(isset($currentPlanner->playlist_id))
    <a class="badge badge__style mb-3 w-100" href="{{ $currentPlanner->playlist_uri }}">
      {{ $currentPlanner->playlist_name }}
    </a>
    @else
    <a class="btn btn-primary my-3 w-100" href="{{ route('playlist.search', $currentPlanner) }}">
      {{ __('Füge hier Eure Festival-Playlisten ein!') }}
    </a>
    @endif
  </section>
</div>
</div>
@endsection