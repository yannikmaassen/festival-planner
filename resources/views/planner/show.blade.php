@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section class="mb-4">
    <div class="planner-element">
      <img class="auth__image my-4" src="{{ $currentPlanner->getImageAttributePlanner($currentPlanner->planner_image) }}" alt="Festival-Szenerie">
      <div class="planner-element__heading">
        <h1>{{ $currentPlanner->festival->festival_name }}</h1>
        <a href="{{ route('planner.edit', $currentPlanner) }}" class="btn btn__edit-planner ml-4 mb-3">
          <svg class="bi bi-pencil-square" width="2.3em" height="2.3em" viewBox="0 0 16 16" fill="var(--orange_main)" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>

      <div class="festival-default-info">
        <div class="festival-default-info__heading">
          <svg class="bi bi-calendar3 mr-2" width="0.9em" height="0.9em" viewBox="0 0 16 16" fill="var(--orange_main)" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
            <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
          </svg>
          <h4>
            Zeitraum
          </h4>
        </div><br>
        <p>{{ $currentPlanner->festival->start_date }} - {{ $currentPlanner->festival->end_date }}</p>
        <div class="festival-default-info__heading">
          <svg class="bi bi-geo mr-2" width="1em" height="1em" viewBox="0 0 16 16" fill="red" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z" />
            <path fill-rule="evenodd" d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z" />
          </svg>
          <h4>
            Location
          </h4>
        </div><br>
        <p>{{ $currentPlanner->festival->location }}</p>

        <div class="festival-default-info__heading">
          <h4>
            <svg class="bi bi-music-note-beamed mr-1" width="0.8em" height="0.8em" viewBox="0 0 16 16" fill="white" xmlns="http://www.w3.org/2000/svg">
              <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z" />
              <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z" />
              <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z" />
            </svg>
            Genres
          </h4>
        </div><br>
        <p>{{ $currentPlanner->festival->genres }}</p>
      </div>
      <section class="festival-info-text">
        <div class="planner-element__heading--dark">
          <h4>Beschreibung</h4>
          <svg class="bi bi-info-circle-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="var(--rich_black)" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
          </svg>
        </div>
        {{ $currentPlanner->info_text }}
      </section>
  </section>

  <hr>
  <section class="planner-element">
    <div class="planner-element__heading">
      <h2>
        <svg class="bi bi-people-fill" width="0.8em" height="0.8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
        </svg>
        Festivalcrew</h2>
      @if(count($users) >= 1)
      <a href="{{ route('friends.add', $currentPlanner) }}" class="btn btn__add-friend">
        <svg class="bi bi-plus-square-fill" width="2.2em" height="2.2em" viewBox="0 0 16 16" fill="var(--orange_main)" xmlns="http://www.w3.org/2000/svg">
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
      <h2>
        <svg class="bi bi-list-ul" width="0.7em" height="0.7em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </svg>
        ToDo-Liste</h2>
      @if(isset($currentPlanner->todo_list))
      <a href="{{ route('todos.edit', $currentPlanner) }}" class="btn btn__edit-todos">
        <svg class="bi bi-pencil-square" width="2.3em" height="2.3em" viewBox="0 0 16 16" fill="var(--orange_main)" xmlns="http://www.w3.org/2000/svg">
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
      {{ __('Fügt ToDos für eure Crew hinzu!') }}
    </a>
    @endif
  </section>

  <section class="planner-element">
    <div class="planner-element__heading">
      <h2>
        <svg class="bi bi-music-note-list" width="0.7em" height="0.7em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
          <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" />
          <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" />
          <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
        </svg>
        Camp-Playlist</h2>
      @if(isset($currentPlanner->playlist_id))
      <a href="{{ route('playlist.search', $currentPlanner) }}" class="btn btn__search-playlist">
        <svg class="bi bi-search" width="2.3em" height="2.3em" viewBox="0 0 16 16" fill="var(--orange_main)" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd" />
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd" />
        </svg>
      </a>
      @endif
    </div>
    @if(isset($currentPlanner->playlist_id))
    <div class="playlist-info">
      <img class="mb-3" src="{{ $currentPlanner->playlist_images }}" alt="">
      <a href="{{ $currentPlanner->playlist_uri }}">
        <h2>{{ $currentPlanner->playlist_name }}</h2>
        <p>by {{ $currentPlanner->playlist_owner }}</p>
      </a></div>
    @else
    <a class="btn btn-primary my-3 w-100" href="{{ route('playlist.search', $currentPlanner) }}">
      {{ __('Fügt hier eure Playlist über Spotify hinzu!') }}
    </a>
    @endif
  </section>
</div>
</div>
@endsection