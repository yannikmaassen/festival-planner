@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 text-center mt-3">
    Festival-Planner hinzufügen
  </p>

  <form>
    @csrf
    <div class="form-group mt-3">
      <label class="form__label" for="planner_input1">Name des Festivals</label>
      <input class="form-control" id="planner_input1">
    </div>
    <div class="form-group mt-3">
      <label class="form__label" for="planner_input2">Datum</label>
      <input class="form-control" id="planner_input2">
    </div>
    <div class="form-group mt-3">
      <label class="form__label" for="planner_input3">Genre</label>
      <select class="custom-select" id="planner_input3" multiple>
        <option selected>Bitte Genres auswählen</option>
        <option value="1">Rock</option>
        <option value="2">HipHop</option>
        <option value="3">Electro</option>
      </select>
    </div>
    <div class="form-group mt-3">
      <label class="form__label" for="planner_input4">Headliner</label>
      <input class="form-control" id="planner_input4">
    </div>
    <div class="form-group">
      <label class="form__label" for="planner_input5">Beschreibung des Festivals</label>
      <textarea class="form-control" id="planner_input5" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label class="form__label" for="planner_input6">Planner-Bild</label>
      <input type="file" class="form-control-file" id="planner_input6">
    </div>
    <div class="form-group row justify-content-center">
      <div class="col-md-8 offset-md-4">
        <a type="submit" class="btn btn-primary my-3 w-100" href="{{ url('/planner') }}">
          {{ __('Planner anlegen') }}
        </a>
      </div>
    </div>
  </form>
</div>
@endsection