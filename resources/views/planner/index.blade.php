<!-- this view will be the overview of all festivals on the first nav-page:
suggestion: horizontal cards, border cards, modified kitchen sink -->

@extends ('layouts/app_nav')

@section('content')

<a href="{{ url('/planner') }}">
  <div class="content mx-3">
    <div class="card mb-4 mt-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="festival-card">
            <h5 class="card-title h3">Rock am Ring</h5>
            <p class="card-text">05.-07.06.2020</p>
            <p class="card-text">System of a Down - Green Day - Volbeat</p>
          </div>
        </div>
      </div>
    </div>
</a>

<a href="{{ url('/planner') }}">
  <div class="card mb-4" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="festival-card">
          <h5 class="card-title h3">Hurricane Festival</h5>
          <p class="card-text">23.-25.06.2020</p>
          <p class="card-text">Seeed - Martin Garrix - The Killers - Deichkind</p>
        </div>
      </div>
    </div>
  </div>
</a>

<a href="{{ url('/planner') }}">
  <div class="card mb-4" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="festival-card">
          <h5 class="card-title h3">Airbeat One Festival</h5>
          <p class="card-text">14.-17.07.2020</p>
          <p class="card-text">David Guetta - Hardwell - Neelix</p>
        </div>
      </div>
    </div>
  </div>
  </div>
</a>
@endsection