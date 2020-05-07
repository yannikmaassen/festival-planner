<!-- this view will be the overview of all festivals on the first nav-page:
suggestion: horizontal cards, border cards, modified kitchen sink -->

@extends ('layouts/app_nav')

@section('content')
<div class="content mx-3">
  <a href="{{ url('/planner') }}">
    <div class="card mb-4 mt-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-8">
          <div class="festival-card">
            <h3 class="card-title">Rock am Ring</h3>
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
            <h3 class="card-title">Hurricane Festival</h3>
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
            <h3 class="card-title">Airbeat One Festival</h3>
            <p class="card-text">14.-17.07.2020</p>
            <p class="card-text">David Guetta - Hardwell - Neelix</p>
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
            <h3 class="card-title">Tomorrowland</h3>
            <p class="card-text">19.-23.07.2020</p>
            <p class="card-text">David Guetta - Hardwell - Axwell</p>
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
            <h3 class="card-title">Glastonbury Festival</h3>
            <p class="card-text">19.-23.08.2020</p>
            <p class="card-text">Billie Eilish - Daft Punk - Eminem</p>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>
@endsection