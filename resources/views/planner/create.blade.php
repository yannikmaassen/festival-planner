@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 text-center mt-3">
    Festival-Planner hinzufügen
  </p>

  <form method="POST" action="{{ route('planner.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="control-label">Festival auswählen</label>
      <select autocomplete="off" name="festivals" size="10" class="form-control @error('festivals') is-invalid @enderror">
        @foreach ($festivals as $festival)
        <option value="{{ $festival->id }}">{{ $festival->festival_name }}</option>
        @endforeach
      </select>
      @error('festival')
      <p class="invalid-feedback">{{ $errors->first('festivals') }}</p>
      @enderror
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
