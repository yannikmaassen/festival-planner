@extends('layouts/app_nav')

@section('content')

<div class="content mx-3 mt-3">
  @foreach($planners as $planner)
  <a href="{{ url('/planner/' . $planner->planner_id) }}">
    <div class="card mb-4" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="festival-card">
            <h3 class="card-title">{{ $planner->festival->festival_name }}</h3>
            <p class="card-text">{{ $planner->festival->start_date }} - {{ $planner->festival->end_date }}</p>
            <p class="card-text">{{ $planner->festival->location }}</p>
          </div>
        </div>
      </div>
    </div>
  </a>
  @endforeach
</div>
@endsection