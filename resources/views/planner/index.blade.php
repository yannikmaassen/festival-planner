<!-- this view will be the overview of all festivals on the first nav-page:
suggestion: horizontal cards, border cards, modified kitchen sink -->

@extends ('layouts/app_nav')

@section('content')

<div class="content mx-3">
  <div class="card mb-4 mt-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="festival-card">
          <h5 class="card-title h3">Rock am Ring</h5>
          <p class="card-text"><small>05.-07.06.2020</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-4" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="festival-card">
          <h5 class="card-title h3">Hurricane Festival</h5>
          <p class="card-text"><small>23.-25.06.2020</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-4" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-8">
        <div class="festival-card">
          <h5 class="card-title h3">Airbeat One Festival</h5>
          <p class="card-text"><small>14.-17.07.2020</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection