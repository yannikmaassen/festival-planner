@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 mt-2">
    Erzähl' was über dich!
  </p>
  <a class="btn-link small text-muted" href="#">Nö, warum?</a>

  <form>
    <div class="form-group mt-3">
      <label class="label--form" for="profile_input1">Dein Name</label>
      <input class="form-control" id="profile_input1" placeholder="z.B. Max">
    </div>
    <div class="form-group">
      <label class="label--form" for="profile_input2">Dein Profilbild</label>
      <input type="file" class="form-control-file" id="profile_input2">
    </div>
    <div class="form-group">
      <label class="label--form" for="profile_input3">Eine kleine Beschreibung über dich</label>
      <textarea class="form-control" id="profile_input3" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label class="label--form" for="profile_input4">Hier Volltextsuche mit Spotify API einbinden</label>
      <textarea class="form-control" id="profile_input4" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label class="label--form" for="exampleFormControlSelect1">Auf wie vielen verschiedenen Festivals warst du bereits?</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label class="label--form" for="profile_input5">Welche Festivals hast du bereits besucht?</label>
      <textarea class="form-control" id="profile_input5" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label class="label--form" for="profile_input5">Deine persönliche Packliste</label>
      <textarea class="form-control" id="profile_input5" rows="3" placeholder="Liste hier alle Items auf, die für dich auf keinem Festival fehlen dürfen!"></textarea>
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