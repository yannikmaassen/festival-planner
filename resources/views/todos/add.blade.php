@extends('layouts/app_nav')

@section('content')
<div class="container">
  <h2 class="text-white text-center mt-3">ToDo-Liste hinzufügen</h2>
  <div class="form-group">
    <label class="label--form mt-3" for="todos_input">ToDo-Liste</label>
    <textarea class="form-control" id="todos_input" rows="12" placeholder="Füge hier deine ToDo-Liste ein, die du mit deiner Crew bearbeiten und abarbeiten kannst."></textarea>
  </div>
  <a type="submit" class="btn btn-primary my-3 w-100" href="{{ url('/planner') }}">
    {{ __('Speichern') }}
  </a>
</div>
@endsection