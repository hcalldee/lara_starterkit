<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
-->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../vendor/sneat/assets/"
  data-template="vertical-menu-template-free"
  >
    {{-- header --}}
    @include('layouts.templates.header')

    <body>
    {{-- content --}}
    @yield('dashboard')


    <!-- Footer -->
    @include('layouts.templates.footer')
  </body>
</html>

