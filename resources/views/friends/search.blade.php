@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row align-items-center justify-content-center">
    <a class="btn-back" href="{{ route('friends.add', $currentPlanner) }}">
      <svg class="bi bi-chevron-left mr-2" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z" clip-rule="evenodd" />
      </svg>
      Zurück zur Suche</a>
    <div class="box__search--heading">
      <h4 class="my-2 text-center">Suchergebnisse für "{{ $query }}":</h4>
    </div>

  </div>
  <div class="row text-center">
    @foreach($friends as $friend)
    <div class="col-md-3">
      <div class="searchResult__box">
        <a href="{{ url('/profile/' . $friend->id) }}">
          <h3 class="text-white">{{ $friend->user_name }}</h3>
        </a>
        <form method="POST" action="{{ route('planner.update', $currentPlanner) }}">
          <input name="user_id" type="hidden" value="{{ $friend->id }}">
          @csrf
          @method('PATCH')
          <button class="btn__add-playlist my-2" @if($currentPlanner->user->contains($friend->id)) disabled @endif>
            <svg class="bi bi-plus-square-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2zm6.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd" />
            </svg>
          </button>
        </form>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection