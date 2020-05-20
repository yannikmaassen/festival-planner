@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center my-2">
    <img class="profile__image" src="/images/people-at-concert.jpg" alt="Profilbild">
  </div>
  <div class="row justify-content-center mt-2 mb-4">
    <p class="h2">Maik Peters</p>
  </div>
  <section>
    <h3 class="profile__section--heading">Beschreibung</h3>
    <p class="profile__section">
      Hi, ich bin Maik und ich gehe immer gerne auf Festivals!<br>
    </p>
  </section>
  <hr>
  <section class="mb-3">
    <h3 class="profile__section--heading">Mein Lieblingsfestival</h3>
    <span class="badge badge__style">Rock am Ring</span>
  </section>
</div>
@endsection