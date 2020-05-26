@extends('layouts.app_nav')

@section('content')
<div class="container">
  <p class="h2 text-center my-4">
    Erzähl' was über dich!
  </p>

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
      <label class="form__label" for="profile_input3">Eine kleine Beschreibung über dich:</label>
      <textarea class="form-control" id="profile_input3" rows="3" name="profile_description">{{ old('profile_description') ?? $ownProfile->profile_description }}</textarea>
    </div>
    <div class="form-group">
      <label class="form__label">Dein Lieblingsfestival?</label>
      <select multiple autocomplete="off" name="festival_id" size="5" class="form-control @error('festival_id') is-invalid @enderror">
        @foreach ($festivals as $festival)
        <option value="{{ $festival->id }}">{{ $festival->festival_name }}</option>
        @endforeach
      </select>
      @error('festival_id')
      <p class="invalid-feedback">{{ $errors->first('festival_id') }}</p>
      @enderror
    </div>
    <hr>
    <div class="btn-group__edit mb-4">
      <button type="submit" class="btn__save-changes">
        {{ __('Änderungen speichern') }}
      </button>
  </form>
  <form method="POST" action="{{ route('profile.destroy', $ownProfile) }}">
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
</div>
@endsection