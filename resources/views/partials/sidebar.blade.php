<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item me-auto">
        <a class="navbar-brand" href="#">
          @include('partials.logo')
          <h2 class="brand-text">Vuexy</h2>
        </a>
      </li>
      <li class="nav-item nav-toggle">
        <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
          <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
          <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc" data-ticon="disc">
          </i>
        </a>
      </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul id="main-menu-navigation" class="navigation navigation-main" data-menu="menu-navigation">
      <li class=" navigation-header">
        <span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span>
        <i data-feather="more-horizontal"></i>
      </li>
      <li class=" nav-item">
        <a class="d-flex align-items-center" href="#">
          <i data-feather="grid"></i>
          <span class="menu-title text-truncate" data-i18n="Datatable">Datatable</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="d-flex align-items-center" href="{{ route('server-side.index') }}">
              <i data-feather="circle"></i>
              <span class="menu-item text-truncate" data-i18n="Server Side">Server Side</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
