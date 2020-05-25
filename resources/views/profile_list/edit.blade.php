@extends('layouts/app_nav')

@section('content')
<div class="container">
  <h2 class="text-white text-center mt-3">Packliste bearbeiten</h2>
  <form method="POST" action="{{ route('profile.update', $ownProfile) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label class="form__label mt-3">ToDo-Liste</label>
      <textarea class="form-control" name="profile_list" rows="12" placeholder="Füge hier deine Packliste ein, damit nichts vergessen wird.">{{ old('profile_list') ?? $ownProfile->profile_list }}</textarea>
      @error('todo_list')
      <p class="invalid-feedback">{{ $errors->first('profile_list') }}</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary my-3 w-100">
      {{ __('Änderungen speichern') }}
    </button>
  </form>
</div>
@endsection