@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 text-center mt-3">
    Festival-Planner hinzufügen
  </p>

  <form method="POST" action="{{ route('planner.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="form__label">Festival auswählen</label>
      <select autocomplete="off" name="festival_id" size="10" class="form-control @error('products') is-invalid @enderror">
        @foreach ($festivals as $festival)
        <option value="{{ $festival->id }}">{{ $festival->festival_name }}</option>
        @endforeach
      </select>
      @error('festival')
      <p class="invalid-feedback">{{ $errors->first('festivals') }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label class="form__label">Info-Text des Planners</label>
      <textarea class="form-control" rows="3" name="info_text" placeholder="Schreibe hier ein paar Grußworte an deine Freunde oder eine kleine Beschreibung über das Festival!"></textarea>
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