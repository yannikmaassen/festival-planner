@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class=" col-md-9">
      <h3 class="my-5 text-center">Search Results for "{{ $query }}"</h3>
    </div>
  </div>
  <div class="row mb-5 d-flex justify-content-start text-center">
    @foreach($friends as $friend)
    <div class="col-md-3">
      <a href="{{ url('/profile/' . $friend->id) }}" class="d-block border rounded mb-4 p-0 shadow-sm text-decoration-none bg-dark">
        <h4 class="text-white my-1"><small>User-Name:</small> {{ $friend->user_name }}</h4>
        <h4 class="text-white my-1"><small>E-Mail:</small> {{ $friend->email }}</h4>
        <form method="POST" action=""></form>
        @csrf
        @method('PATCH')
        <button class="btn btn-primary my-2">Hinzufügen</button>
      </a>
    </div>
    @endforeach
  </div>
  <div class="row">
    <a class="btn btn-secondary" href="{{ route('friends.add') }}">Abbrechen</a>
  </div>
</div>
@endsection