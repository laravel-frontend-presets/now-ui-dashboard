<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
    <a class="navbar-brand" href="#pablo">{{ $namePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link">
            <i class="now-ui-icons design_app"></i> {{ __("Dashboard") }}
          </a>
        </li>
        <li class="nav-item @if ($activePage == 'register') active @endif">
          <a href="{{ route('register') }}" class="nav-link">
            <i class="now-ui-icons tech_mobile"></i> {{ __("Register") }}
          </a>
        </li>
        <li class="nav-item @if ($activePage == 'login') active @endif ">
          <a href="{{ route('login') }}" class="nav-link">
            <i class="now-ui-icons users_circle-08"></i> {{ __("Login") }}
          </a>
        </li>
      <li class="nav-item @if ($activePage == 'pricing') active @endif">
      <a href="#" class="nav-link">
            <i class="now-ui-icons now-ui-icons business_money-coins"></i> {{ __("Pricing") }}
          </a>
        </li>
      <li class="nav-item @if ($activePage == 'lock') active @endif">
          <a href="#" class="nav-link">
            <i class="now-ui-icons ui-1_lock-circle-open"></i>{{ __(" Lock") }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->