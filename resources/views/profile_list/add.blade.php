@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="box__general">
    <h2 class="box__general--heading mt-3">Packliste hinzufügen</h2>
    <form method="POST" action="{{ route('profile.update', $ownProfile) }}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label class="form__label mt-3">Packliste</label>
        <textarea name="profile_list" class="form-control" rows="12" placeholder="Füge hier deine Packliste ein, damit nichts vergessen wird."></textarea>
      </div>
      <button type="submit" class="btn btn-primary my-3 w-100">
        {{ __('Speichern') }}
      </button>
    </form>
  </div>
</div>
@endsection