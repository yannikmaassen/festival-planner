@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="box__general">
    <h2 class="box__general--heading mt-3">ToDo-Liste hinzufügen</h2>

    <form method="POST" action="{{ route('planner.update', $currentPlanner) }}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label class="form__label mt-3" for="todos_input">ToDo-Liste</label>
        <textarea name="todo_list" class="form-control" id="todos_input" rows="12" placeholder="Füge hier deine ToDo-Liste ein, die du mit deiner Crew bearbeiten und abarbeiten kannst."></textarea>
      </div>
      <button type="submit" class="btn btn-primary mb-3 w-100">
        {{ __('Speichern') }}
      </button>
    </form>
  </div>
</div>
@endsection