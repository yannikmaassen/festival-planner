@extends('layouts/app_nav')

@section('content')
<div class="container">

  <div class="box__general">
    <h1 class="box__general--heading my-4">WHOOOPS...</h1><br>
    <div class="row justify-content-center align-items-center mx-2 no-profile__p">
      <h4 class="text-white text-center mb-4">Scheint so, als hättest du noch kein Profil... <br><br>
        Erstell' dir eins und tritt der Planival-Community bei!</h4>
      <a class="btn btn-primary w-100 mb-3" href="{{ route('profile.create') }}">Profil erstellen</a>
    </div>
    <hr>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <div class="row justify-content-center">
        <button class="btn btn__logout mb-5">Logout</button>
      </div>
    </form>
  </div>

</div>
@endsection