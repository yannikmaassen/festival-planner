@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 text-center mt-2">
    Erzähl' was über dich!
  </p>
  <a class="btn-link small text-white" href="#">
    <p class="text-center text-grey">
      Nö, warum?
    </p>
  </a>

  <form method="POST" action="{{ route('profile.update', $ownProfile) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mt-3">
      <label class="form__label" for="profile_input1">Dein Name</label>
      <input class="form-control" id="profile_input1" name="profile_name" value="{{ old('profile_name') ?? $ownProfile->profile_name }}">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Profilbild</span>
      </div>
      <div class="custom-file">
        <input name="profile_image" type="file" class="custom-file-input @error('profile_image') is-invalid @enderror" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">...</label>
        @error('profile_image')
        <p class="invalid-feedback">{{ $errors->first('profile_image') }}</p>
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label class="form__label" for="profile_input3">Eine kleine Beschreibung über dich</label>
      <textarea class="form-control" id="profile_input3" rows="3" name="profile_description">{{ old('profile_description') ?? $ownProfile->profile_description }}</textarea>
    </div>
    <div class="form-group">
      <label class="form__label">Auf welchen Festivals warst du bereits?</label>
      <select multiple autocomplete="off" name="festival_id" size="5" class="form-control @error('festival_id') is-invalid @enderror">
        @foreach ($festivals as $festival)
        <option value="{{ $festival->id }}">{{ $festival->festival_name }}</option>
        @endforeach
      </select>
      @error('festival_id')
      <p class="invalid-feedback">{{ $errors->first('festival_id') }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label class="form__label" for="profile_input5">Deine persönliche Packliste</label>
      <textarea class="form-control" id="profile_input5" rows="3" name="profile_list" placeholder="Liste hier alle Items auf, die für dich auf keinem Festival fehlen dürfen!">{{ old('profile_list') ?? $ownProfile->profile_list }}</textarea>
    </div>
    <div class="form-group row justify-content-center">
      <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary my-3 w-100">
          {{ __('Änderungen speichern') }}
        </button>
      </div>
    </div>
  </form>
</div>
@endsection