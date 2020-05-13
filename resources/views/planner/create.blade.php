@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 text-center mt-3">
    Festival-Planner hinzufügen
  </p>

  <form method="POST" action="{{ route('planner.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group mt-3">
      <label class="form__label" for="name">Name des Festivals</label>
      <input class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    <fieldset class="mt-0">
      <div class="form-group mt-3">
        <legend>Zeitraum</legend>
        <div class="row">
          <div class="col"><label for="start_date">Startdatum</label>
            <input type="date" id="start_date" name="start_date">
          </div>

          <div class="col"><label for="end_date">Enddatum</label>
            <input type="date" id="end_date" name="end_date"></div>
        </div>
      </div>
    </fieldset>


    <!-- 
    <label class="form__label" for="planner_input2">Zeitraum</label>
    <div class="row no-gutters justify-content-between"><input class="col-5 form-control__date" id="planner_input2" type="date" value="{{ old('start_date') }}">
      -
      <input class="col-5 form-control__date" id="planner_input2.1" type="date" value="{{ old('end_date') }}">
    </div> -->

    <div class="form-group mt-3">
      <label class="form__label" for="genre_1">Genre</label>
      <input class="form-control" id="genre_1" name="genre_1" value="{{ old('genre_1') }}">
    </div>
    <div class="form-group mt-3">
      <label class="form__label" for="headliner_1">Headliner</label>
      <input class="form-control" id="headliner_1" name="headliner_1" value="{{ old('headliner_1') }}">
    </div>
    <div class="form-group">
      <label class="form__label" for="description">Beschreibung des Festivals</label>
      <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}"></textarea>
    </div>
    <!-- <div class="form-group">
      <label class="form__label" for="planner_image">Planner-Bild</label>
      <input type="file" class="form-control-file" id="planner_image" value="{{ old('planner_image') }}">
    </div> -->
    <div class="form-group row justify-content-center">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary my-3 w-100">
          {{ __('Planner anlegen') }}
        </button>
      </div>
    </div>
  </form>
</div>
@endsection