@extends('layouts.app_nav')

@section('content')
<div class="container">
  <div class="box__general">
    <p class="box__general--heading h2 my-3">
      Planner bearbeiten
    </p>
    <form method="POST" action="{{ route('planner.update', $currentPlanner) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label class="form__label">Festival ändern</label>
        <select autocomplete="off" name="festival_id" size="6" class="form-control @error('festival_id') is-invalid @enderror">
          @foreach ($festivals as $festival)
          <option value="{{ $festival->id }}">{{ $festival->festival_name }}</option>
          @endforeach
        </select>
        @error('festival_id')
        <p class="invalid-feedback">{{ $errors->first('festival_id') }}</p>
        @enderror
      </div>
      <div class="form-group">
        <label class="form__label" for="planner_input2">Info-Text des Planners</label>
        <textarea class="form-control" id="planner_input2" name="info_text" rows="3">{{ old('info_text') ?? $currentPlanner->info_text }}</textarea>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">
            <svg class="bi bi-card-image" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 00-.5.5v9a.5.5 0 00.5.5h13a.5.5 0 00.5-.5v-9a.5.5 0 00-.5-.5zm-13-1A1.5 1.5 0 000 3.5v9A1.5 1.5 0 001.5 14h13a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0014.5 2h-13z" clip-rule="evenodd" />
              <path d="M10.648 7.646a.5.5 0 01.577-.093L15.002 9.5V13h-14v-1l2.646-2.354a.5.5 0 01.63-.062l2.66 1.773 3.71-3.71z" />
              <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd" />
            </svg>
          </span>
        </div>
        <div class="custom-file">
          <input name="planner_image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">...</label>
        </div>
      </div>
      <hr>
      <div class="btn-group__edit my-4">
        <button type="submit" class="btn__save-changes">
          {{ __('Änderungen speichern') }}
        </button>
    </form>
    <form method="POST" action="{{ route('planner.destroy', $currentPlanner) }}">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn__delete-planner">
        <svg class="bi bi-trash mr-2" width="1.2em" height="1.2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.5 5.5A.5.5 0 016 6v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm2.5 0a.5.5 0 01.5.5v6a.5.5 0 01-1 0V6a.5.5 0 01.5-.5zm3 .5a.5.5 0 00-1 0v6a.5.5 0 001 0V6z" />
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 01-1 1H13v9a2 2 0 01-2 2H5a2 2 0 01-2-2V4h-.5a1 1 0 01-1-1V2a1 1 0 011-1H6a1 1 0 011-1h2a1 1 0 011 1h3.5a1 1 0 011 1v1zM4.118 4L4 4.059V13a1 1 0 001 1h6a1 1 0 001-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" clip-rule="evenodd" />
        </svg>
        {{ __('Löschen') }}
      </button>
    </form>
  </div>
</div>
@endsection