<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
  <!--begin::Navbar-->
  <div class="d-flex align-items-stretch" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
      <!--begin::Menu-->
      <div class="h1 mt-4">
        <div class="pt-2">
          {{ config('app.name') }}
        </div>
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
  </div>
  <!--end::Navbar-->
  <!--begin::Topbar-->
  <div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Toolbar wrapper-->
    <x-admin.toolbar/>
    <!--end::Toolbar wrapper-->
  </div>
  <!--end::Topbar-->
</div>
