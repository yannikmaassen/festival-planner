@extends('layouts/app_nav')

@section('content')
<div class="container">
  <h2 class="text-white text-center mt-3">ToDo-Liste bearbeiten</h2>
  <form method="POST" action="{{ route('planner.update', $currentPlanner) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="form__label mt-3" for="todos_input">ToDo-Liste</label>
      <textarea class="form-control" name="todo_list" id="todos_input" rows="12" placeholder="Füge hier deine ToDo-Liste ein, die du mit deiner Crew bearbeiten und abarbeiten kannst.">{{ old('todo_list') ?? $currentPlanner->todo_list }}</textarea>
      @error('todo_list')
      <p class="invalid-feedback">{{ $errors->first('todo_list') }}</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary mb-3 w-100">
      {{ __('Änderungen speichern') }}
    </button>
  </form>
</div>
@endsection