@extends('layouts.app_nav')

@section('content')
<div class="container">
  <div class="box__general">
    <p class="box__general--heading h2 my-4">
      Erzähl' was über dich!
    </p>
    <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group mt-3">
        <label class="form__label" for="profile_input1">Dein Name</label>
        <input class="form-control @error('profile_name') is-invalid @enderror" id="profile_input1" name="profile_name">
        @error('profile_name')
        <p class="invalid-feedback">{{ $errors->first('profile_name') }}</p>
        @enderror
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Profilbild</span>
        </div>
        <div class="custom-file">
          <input name="profile_image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
          <label class="custom-file-label" for="inputGroupFile01">...</label>
        </div>
      </div>
      <div class="form-group">
        <label class="form__label" for="profile_input3">Eine kleine Beschreibung über dich:</label>
        <textarea class="form-control @error('profile_description') is-invalid @enderror" id="profile_input3" rows="2" name="profile_description"></textarea>
        @error('profile_description')
        <p class="invalid-feedback">{{ $errors->first('profile_description') }}</p>
        @enderror
      </div>
      <div class="form-group">
        <label class="form__label">Dein Lieblingsfestival?</label>
        <select autocomplete="off" name="festival_id" size="3" class="form-control">
          @foreach ($festivals as $festival)
          <option value="{{ $festival->id }}">{{ $festival->festival_name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group row justify-content-center">
        <div class="col-md-8 offset-md-4">
          <button type="submit" class="btn btn-primary my-2 w-100">
            {{ __('Profil anlegen') }}
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection