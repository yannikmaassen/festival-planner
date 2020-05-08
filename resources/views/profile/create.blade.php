@extends('layouts.app')
@include('includes/header')

@section('content')
<div class="container">
  <div class="justify-content-center">
    <p class="h2 text-center mt-2">
      Erzähl' was über dich!
    </p>
    <a class="btn-link small" href="#">
      <p class="text-center text-white">
        Nö, warum?
      </p>
    </a>
    <form>
      @csrf
      <div class="form-group mt-3">
        <label class="form__label" for="profile_input1">Name</label>
        <input class="form-control" id="profile_input1">
      </div>
      <div class="form-group">
        <label class="form__label" for="profile_input2">Profilbild</label>
        <input type="file" class="form-control-file" id="profile_input2">
      </div>
      <div class="form-group">
        <label class="form__label" for="profile_input3">Beschreibung</label>
        <textarea class="form-control" id="profile_input3" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label class="form__label" for="profile_input4">Hier Volltextsuche mit Spotify API einbinden</label>
        <textarea class="form-control" id="profile_input4" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label class="form__label" for="exampleFormControlSelect1">Wie viele Festivals hast du bereits besucht?</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form__label" for="profile_input5">Welche Festivals hast du bereits besucht?</label>
        <textarea class="form-control" id="profile_input5" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label class="form__label" for="profile_input5">Deine persönliche Packliste</label>
        <textarea class="form-control" id="profile_input5" rows="3" placeholder="Liste hier alle Items auf, die für dich auf keinem Festival fehlen dürfen!"></textarea>
      </div>
      <div class="form-group row justify-content-center">
        <div class="col-md-8 offset-md-4">
          <a type="submit" class="btn btn-primary my-3 w-100" href="{{ url('/profile/own') }}">
            {{ __('Änderungen speichern') }}
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection