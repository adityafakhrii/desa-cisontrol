<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Desa Cisontrol</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('../../vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('../../css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('../../images/favicon.png') }}" />
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.__navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles light"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.__sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial -->
      </div>

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src="https://unpkg.com/htmx.org@1.9.6" integrity="sha384-FhXw7b6AlE/jyjlZH5iHa/tTe9EpJ1Y55RjcgPbjeWMskSxZt1v9qkxLJWNJaGni" crossorigin="anonymous"></script>
  <!-- base:js -->
  <script src="{{ asset('../../vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <script src="{{ asset('../../js/jq.tablesort.js') }}"></script>
  <script src="{{ asset('../../js/tablesorter.js') }}"></script>

  <!-- inject:js -->
  <script src="{{ asset('../../js/off-canvas.js') }}"></script>
  <script src="{{ asset('../../js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('../../js/template.js') }}"></script>
  <script src="{{ asset('../../js/settings.js') }}"></script>
  <script src="{{ asset('../../js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('../../vendors/progressbar.js/progressbar.min.js') }}"></script>
  <script src="{{ asset('../../vendors/flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('../../vendors/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('../../vendors/chart.js/Chart.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('../../js/chart.flot.sampledata.js') }}"></script>
  <script src="{{ asset('../../js/dashboard.sampledata.js') }}"></script>
  <script src="{{ asset('../../vendors/patternomaly/patternomaly.js') }}"></script>
  <script src="{{ asset('../../js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->

  <!-- plugin js for this page -->
  <script src="{{ asset('../../vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('../../vendors/select2/select2.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('../../js/file-upload.js') }}"></script>
  <script src="{{ asset('../../js/iCheck.js') }}"></script>
  <script src="{{ asset('../../js/typeahead.js') }}"></script>
  <script src="{{ asset('../../js/select2.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>
