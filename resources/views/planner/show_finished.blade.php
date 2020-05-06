@extends('layouts.app_nav')

@section('content')
<div class="container">
  <section>
    <img class="image--auth mt-3" src="/images/blog_festival_Main.jpg" alt="Bild einer Festival-Szene">
    <h1 class="text-white mt-3">Rock am Ring</h1>
    <p><small>05.06.-07.06.2020</small></p>
    <p>Green Day, System of a Down, Volbeat</p>
    <p>Rock am Ring ist ein von Marek Lieberberg veranstaltetes Musikfestival, das von 1985 bis 2014 und seit 2017 wieder auf dem Nürburgring in der Nähe der Stadt Adenau in der Eifel stattfindet.</p>
  </section>
  <section>
    <h2 class="text-white">Deine Festivalcrew</h2>
    <a href="/profile/own"><img src="/images/icon.png" alt="">
      <p>Yannik Maaßen</p>
    </a>
  </section>
  <section>
    <h2 class="text-white">ToDo-Liste</h2>
    <p>- Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
      - Lorem, ipsum dolor.<br>
    </p>
  </section>
  <section>
    <h2 class="text-white">Music</h2>
    <div class="box mb-3">Platzhalter für eine Übersicht über die Spotify-Playlisten</div>
  </section>
</div>
@endsection