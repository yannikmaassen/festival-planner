@extends('layouts/app_nav')

@section('content')

<div class="content mx-3 mt-3">
  @foreach($planners as $planner)
  <a href="{{ url('/planner/' . $planner->planner_id) }}">
    <div class="card mb-4" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="festival-card">
            <h3 class="card-title">Rock am Ring</h3>
            <p class="card-text">05.06.2021 - 07.06.2021</p>
            <p class="card-text">Nürburgring</p>
          </div>
        </div>
      </div>
    </div>
  </a>
  @endforeach
</div>
@endsection