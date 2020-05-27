@extends('layouts.app_nav')

@section('content')
<div class="container">
  <div class="box__general">
    <p class="box__general--heading h2 my-3">
      Planner erstellen
    </p>

    <form method="POST" action="{{ route('planner.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label class="form__label">Festival auswählen</label>
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
        <label class="form__label">Info-Text des Planners</label>
        <textarea class="form-control @error('info_text') is-invalid @enderror" rows="3" name="info_text" placeholder="Schreibe hier z.B. Grußworte an deine Freunde oder eine kleine Beschreibung über das Festival! Es ist ganz dir überlassen!"></textarea>
        @error('info_text')
        <p class="invalid-feedback">{{ $errors->first('info_text') }}</p>
        @enderror
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
          <input name="planner_image" type="file" class="custom-file-input @error('planner_image') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">...</label>
          @error('planner_image')
          <p class="invalid-feedback">{{ $errors->first('planner_image') }}</p>
          @enderror
        </div>
      </div>
      <hr>
      <div class="form-group row justify-content-around align-items-center">
        <a class="btn-back" href="{{ url()->previous() }}">
          <svg class="bi bi-chevron-left" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z" clip-rule="evenodd" />
          </svg></a>
        <button type="submit" class="btn__create-planner my-3">
          {{ __('Planner anlegen') }}
        </button>

      </div>
    </form>
  </div>
</div>
@endsection