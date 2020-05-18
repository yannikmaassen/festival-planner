<footer>
  <nav class="navbar">
    <a href="{{ route('planner.index') }}" class="{{ (request()->is('planner')) ? 'active' : '' }}">
      <svg class="nav__svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
      </svg></a>
    <a href="{{ route('planner.create') }}" class="{{ (request()->is('planner/create')) ? 'active' : '' }}">
      <svg class="nav__svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" fill-rule="evenodd"></path>
      </svg>
    </a>
    <a href="{{ route('profile.show', $ownProfile) }}" class="{{ (request()->is('profile/own')) ? 'active' : '' }}">
      <svg class="nav__svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" fill-rule="evenodd"></path>
      </svg>
    </a>
  </nav>
</footer>