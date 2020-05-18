@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 text-center mt-3">
    Festival-Planner adden
  </p>

  <form method="POST" action="{{ route('planner.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="form__label">Festival auswählen</label>
      <select autocomplete="off" name="festival_id" size="10" class="form-control @error('festival_id') is-invalid @enderror">
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
      <textarea class="form-control @error('info_text') is-invalid @enderror" rows="3" name="info_text" placeholder="Schreibe hier ein paar Grußworte an deine Freunde oder eine kleine Beschreibung über das Festival!"></textarea>
      @error('info_text')
      <p class="invalid-feedback">{{ $errors->first('info_text') }}</p>
      @enderror
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Planner-Bild</span>
      </div>
      <div class="custom-file">
        <input name="planner_image" type="file" class="custom-file-input @error('planner_image') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">...</label>
        @error('planner_image')
        <p class="invalid-feedback">{{ $errors->first('planner_image') }}</p>
        @enderror
      </div>
    </div>
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