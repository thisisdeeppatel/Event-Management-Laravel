 {{-- navbar --}}

 <nav class="navbar navbar-expand-lg bg-body-tertiary">

    <a class="navbar-brand" href="/dashboard">Event++</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Location
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/dashboard/location/add">Add</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/dashboard/location/view_all">View All</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Event
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/dashboard/event/add">Add</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/dashboard/event/view_all">View All</a>
            </div>
          </li>
    </ul>
    </div>
</div>
</nav>
