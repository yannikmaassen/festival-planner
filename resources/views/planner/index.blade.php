<!-- this view will be the overview of all festivals on the first nav-page:
suggestion: horizontal cards, border cards, modified kitchen sink -->

@extends ('layouts/app_nav')

@section('content')

<div class="content mx-3 mt-3">
  @foreach($planners as $planner)
  <a href="{{ url('/planner/' . $planner->id) }}">
    <div class="card mb-4" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="festival-card">
            <h3 class="card-title">{{ $planner->name }}</h3>
            <p class="card-text">{{ $planner->start_date }} - {{ $planner->end_date }}</p>
            <p class="card-text">{{ $planner->headliner_1 }} - {{ $planner->headliner_2 }} - {{ $planner->headliner_3 }}</p>
          </div>
        </div>
      </div>
    </div>
  </a>
  @endforeach
</div>
@endsection