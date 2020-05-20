@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center mx-2">
    <h1 class="text-white text-center my-5">WHOOOPS... </h1><br>
    <h4 class="text-white text-center mt-5 mb-4">Scheint so, als hättest du noch kein Profil... <br><br>
      Erstell' dir doch gleich eins!</h4>
    <a class="btn btn-primary" href="{{ route('profile.create') }}">Profil erstellen</a>
  </div>
  <hr>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <div class="row justify-content-center">
      <button class="btn btn__logout mb-4">Logout</button>
    </div>
  </form>
</div>
@endsection