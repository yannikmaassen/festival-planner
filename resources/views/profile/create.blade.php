@extends('layouts.app')

@section('content')
<div class="container">
  <p class="h2 mt-2 text-align">
    Erzähl' was über dich!
  </p>
  <a class="btn-link small text-muted" href="#">Nö, warum?</a>

  <form>
    <div class="form-group mt-3">
      <label for="exampleFormControlInput1">Dein Name</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="z.B. Max">
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Dein Profilbild</label>
      <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Eine kleine Beschreibung über dich</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Hier Volltextsuche mit Spotify API einbinden</label>
      <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Auf wie vielen verschiedenen Festivals warst du bereits?</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Welche Festivals hast du bereits besucht?</label>
      <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Deine persönliche Packliste</label>
      <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" placeholder="Liste hier alle Items auf, die für dich auf keinem Festival fehlen dürfen!"></textarea>
    </div>
    <div class="form-group row justify-content-center">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary mb-4">
          {{ __('Änderungen speichern') }}
        </button>
      </div>
    </div>
  </form>
</div>
@endsection