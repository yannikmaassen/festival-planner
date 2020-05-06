@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section>
    <img class="image--auth" src="/images/blog_festival_Main.jpg" alt="">
    <h1 class="text-white mt-3">Rock am Ring</h1>
    <p><small>05.06.-07.06.2020</small></p>
    <p>Green Day, System of a Down, Volbeat</p>
    <p>Rock am Ring ist ein von Marek Lieberberg veranstaltetes Musikfestival, das von 1985 bis 2014 und seit 2017 wieder auf dem Nürburgring in der Nähe der Stadt Adenau in der Eifel stattfindet.</p>
  </section>
  <section>
    <h2 class="text-white">Deine Festivalcrew</h2>
    <button class="btn btn-primary mb-4 w-100">
      {{ __('Füge weitere Crewmember hinzu!') }}
    </button>
  </section>
  <section>
    <h2 class="text-white">ToDo-Liste</h2>
    <button class="btn btn-primary mb-4 w-100">
      {{ __('Füge ToDos für Dich und Deine Crew hinzu!') }}
    </button>
  </section>
  <section>
    <h2 class="text-white">Music</h2>
    <button class="btn btn-primary mb-4 w-100">
      {{ __('Füge hier Eure Festival-Playlisten ein!') }}
    </button>
  </section>
</div>
@endsection