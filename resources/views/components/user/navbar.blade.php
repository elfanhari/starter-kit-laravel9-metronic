{{-- Navbar --}}
<div class="d-flex align-items-stretch" id="kt_header_nav">
  <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
      <div class="menu-item me-lg-1">
        <a class="menu-link py-3 {{ Request::is('dashboard*') ? 'active' : '' }}" href="">
          <span class="menu-title">Dashboard</span>
        </a>
      </div>
      <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
        <span class="menu-link py-3 {{ Request::is('user*') |
            Request::is('menu2*') |
            Request::is('menu3*') ? 'active' : ''}}">
          <span class="menu-title">DATA</span>
          <span class="menu-arrow d-lg-none"></span>
        </span>
        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
          <div class="menu-item">
            <a class="menu-link py-3 {{ Request::is('user*') ? 'active' : '' }}" href="{{ route('user.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">User</span>
            </a>
          </div>
          <div class="menu-item">
            <a class="menu-link py-3 {{ Request::is('menu2*') ? 'active' : '' }}" href="{{ route('user.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">Menu 2</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<x-user.toolbar></x-user.toolbar>
