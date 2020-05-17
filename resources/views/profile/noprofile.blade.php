@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center mx-2 my-2">
    <h3 class="text-white">Scheint so, als hättest du noch kein Profil... <br>
      Erstell' dir eins, wenn du magst!</h3>
    <a class="btn btn-primary" href="{{ route('profile.create') }}">Profil erstellen</a>
  </div>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <div class="row justify-content-center">
      <button class="btn btn__logout mb-4">Logout</button>
    </div>
  </form>
</div>
@endsection