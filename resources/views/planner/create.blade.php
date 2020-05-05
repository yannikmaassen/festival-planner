@extends('layouts.app')
@include('includes/header')

@section('content')
<div class="container">
  <p class="h2 mt-2">
    Festival-Planner hinzufügen
  </p>

  <form>
    <div class="form-group mt-3">
      <label class="label--form" for="planner_input1">Name des Festivals</label>
      <input class="form-control" id="planner_input1" placeholder="z.B. &#34Rock am Ring&#34">
    </div>
    <div class="form-group mt-3">
      <label class="label--form" for="planner_input2">Datum</label>
      <input class="form-control" id="planner_input2" placeholder="z.B. 05.06.-07.06.2020">
    </div>
    <div class="form-group mt-3">
      <label class="label--form" for="planner_input3">Genre</label>
      <select class="custom-select" id="planner_input3" multiple>
        <option selected>Bitte Genres auswählen</option>
        <option value="1">Rock</option>
        <option value="2">HipHop</option>
        <option value="3">Electro</option>
      </select>
    </div>
    <div class="form-group mt-3">
      <label class="label--form" for="planner_input4">Headliner</label>
      <input class="form-control" id="planner_input4" placeholder="z.B. &#34Foo Fighters, Marteria, Volbeat&#34">
    </div>
    <div class="form-group">
      <label class="label--form" for="planner_input5">Beschreibung des Festivals</label>
      <textarea class="form-control" id="planner_input5" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label class="label--form" for="planner_input6">Planner-Bild</label>
      <input type="file" class="form-control-file" id="planner_input6">
    </div>
    <div class="form-group row justify-content-center">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary mb-4" href="{{ url('/planner') }}">
          {{ __('Anlegen') }}
        </button>
      </div>
    </div>
  </form>
</div>
@endsection