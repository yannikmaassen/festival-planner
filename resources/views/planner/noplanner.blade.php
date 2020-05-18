@extends('layouts/app_nav')

@section('content')
<div class="container">
  <div class="row justify-content-center align-items-center mx-2">
    <h1 class="text-white text-center my-5">WHOOOPS... </h1><br>
    <h4 class="text-white text-center mt-5">Scheint so, als hättest du noch keine Planner... <br><br>
      Erstell' dir welche über das "+" in der Navigation!</h4>
    <svg class="bi bi-arrow-down mt-5" width="4em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M4.646 9.646a.5.5 0 01.708 0L8 12.293l2.646-2.647a.5.5 0 01.708.708l-3 3a.5.5 0 01-.708 0l-3-3a.5.5 0 010-.708z" clip-rule="evenodd" />
      <path fill-rule="evenodd" d="M8 2.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V3a.5.5 0 01.5-.5z" clip-rule="evenodd" />
    </svg>
  </div>
</div>
@endsection