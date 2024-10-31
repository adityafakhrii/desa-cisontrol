<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Deed UI Admin</title>
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
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-between">
          <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('../../images/logo.svg') }}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('../../images/logo-mini.svg') }}" alt="logo"/></a>
          <div class="notification"> <i class="mdi mdi-bell-outline"></i> <span class="indicator"></span></div>
        </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
        <div class="d-none d-lg-flex">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item dropdown nav-dropdown mr-3">
              <a class="dropdown-toggle btn" href="#" data-toggle="dropdown" id="dashDropdown">
                  Dashboard
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="dashDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-airplay text-primary"></i>
                  Widgets
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-view-headline text-primary"></i>
                  Forms
                </a>
              </div>
            </li>
            <li class="nav-item dropdown nav-dropdown">
              <a class="dropdown-toggle btn" href="#" data-toggle="dropdown" id="actionDropdown">
                  Transactions
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="actionDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-inbox text-primary"></i>
                  Recieved
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-forward text-primary"></i>
                  Sent
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-content-cut text-primary"></i>
                  Pending
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="navbar-social-link d-none d-xl-flex align-items-center ">
          <a href="#" class="btn btn-outline-light navbar-mail-btn">Sign up with email</a>
          <span class="mr-2 ml-2">or</span>
          <button type="button" class="btn btn-social-icon btn-facebook mr-2"><i class="mdi mdi-facebook"></i></button>
          <button type="button" class="btn btn-social-icon btn-outline-google bg-white border-0 text-warning"><img src="https://via.placeholder.com/142x105" alt="googel plus"></button>

        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="cartDropdown">
              <i class="mdi mdi-basket text-warning mr-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="cartDropdown">
              <div class="dropdown-item preview-item">
                <div class="preview-thumbnail bg-info">
                    <i class="mdi mdi-cake"></i>
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium mb-1 text-dark">Cake
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    <span class="mr-2 text-dark">$5.00</span> <span>quantity : 1</span>
                  </p>
                </div>
              </div>
              <div class="dropdown-item preview-item">
                <div class="preview-thumbnail bg-success text-light">
                    <i class="mdi mdi-television"></i>
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium mb-1 text-dark">Television
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    <span class="mr-2 text-dark">$750.00</span> <span>quantity : 1</span>
                  </p>
                </div>
              </div>
              <div class="dropdown-item preview-item">
                <div class="preview-thumbnail bg-warning text-light">
                    <i class="mdi mdi-cellphone-iphone"></i>
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium mb-1 text-dark">iphone
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    <span class="mr-2 text-dark">$1000.00</span> <span>quantity : 1</span>
                  </p>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="dataDropdown">
              <i class="mdi mdi-chart-bar text-danger mr-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="dataDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-chart-bar-stacked text-primary"></i>
                Graphical
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-table text-primary"></i>
                Tabular
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="screenActionDropdown">
              <i class="mdi mdi-view-grid text-info mr-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="screenActionDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-fullscreen text-primary"></i>
                Fullscreen
              </a>
              <a class="dropdown-item">
                <i class="mdi mdi-fullscreen-exit text-primary"></i>
                Exit Fullscreen
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <div class="nav-link"  data-toggle="dropdown" id="profileDropdown">
              <span>Hi, <span class="nav-profile-name">Elston Gullan</span></span>
              <span class="user-icon">E</span>
              </div>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown user-profile-action" aria-labelledby="profileDropdown">
              <div class="p-3 text-center bg-success">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="https://via.placeholder.com/36x36" alt="">
              </div>
              <div class="p-2">
                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                <a class="dropdown-item py-1 px-2 d-flex align-items-center justify-content-between" href="#">
                  <span>Inbox</span>
                  <span class="p-0">
                    <span class="badge badge-primary">3</span>
                    <i class="mdi mdi-email-open-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 px-2 d-flex align-items-center justify-content-between" href="#">
                  <span>Profile</span>
                  <span class="p-0">
                    <span class="badge badge-success">1</span>
                    <i class="mdi mdi-account-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 px-2 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span>Settings</span>
                  <i class="mdi mdi-settings"></i>
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                <a class="dropdown-item py-1 px-2 d-flex align-items-center justify-content-between" href="#">
                  <span>Lock Account</span>
                  <i class="mdi mdi-lock ml-1"></i>
                </a>
                <a class="dropdown-item py-1  px-2 d-flex align-items-center justify-content-between" href="#">
                  <span>Log Out</span>
                  <i class="mdi mdi-logout ml-1"></i>
                </a>
              </div>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
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
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item sidebar-profile mt-4">
            <a href="#">
              <div>
                <div class="profile-thumb">
                    <img src="https://via.placeholder.com/36x36" alt="profile">
                </div>
                <div class="mt-2">
                  <h3 class="mb-1 profile-name">Elston Gullan</h3>
                  <p class="profile-description">Manchester</p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-cards-variant menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
              <i class="mdi mdi-cube-outline menu-icon"></i>
              <span class="menu-title">Widgets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-heart-outline menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="mdi mdi-layers menu-icon"></i>
              <span class="menu-title">Advanced UI</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-view-grid menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="mdi mdi-pencil-box-outline menu-icon"></i>
              <span class="menu-title">Editors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/popups.html">
              <i class="mdi mdi-comment-alert menu-icon"></i>
              <span class="menu-title">Popups</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/ui-features/notifications.html">
              <i class="mdi mdi-bell menu-icon"></i>
              <span class="menu-title">Notifications</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
              <i class="mdi mdi-map menu-icon"></i>
              <span class="menu-title">Maps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-file-document menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="mdi mdi-content-copy menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <i class="mdi mdi-file menu-icon"></i>
              <span class="menu-title">General Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
              <i class="mdi mdi-briefcase menu-icon"></i>
              <span class="menu-title">E-commerce</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/email.html">
              <i class="mdi mdi-email-open-outline menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/calendar.html">
              <i class="mdi mdi-calendar-blank menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/todo.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Todo List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/apps/gallery.html">
              <i class="mdi mdi-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
          <li class="nav-item report-generator mt-4">
            <p class="font-weight-medium text-white mb-2">PDF Report</p>
            <p class="mb-2">Download monthly report</p>
            <button type="button" class="btn btn-dark btn-icon-text btn-sidebar w-100">
              Download
              <i class="mdi mdi-download btn-icon-prepend float-right"></i>
            </button>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="d-xl-flex justify-content-between align-items-center mb-4 pb-2">
            <div class="text-dark">
              <h2 class="mb-1 font-weight-bold">Here’s todays activity dashboard !</h2>
              <p class="text-small mb-0">Saturday 10 Aug 2019</p>
            </div>
            <div class="statistics d-lg-flex text-dark mt-3 mt-sm-0">
              <div class="mr-0 mr-lg-4 mb-3 mb-lg-0">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="mr-3">
                      <p class="font-weight-medium mb-0">Monthly Statistics</p>
                      <p class="text-small mb-0"><i class="mdi mdi-arrow-top-right mr-0 mr-lg-2 text-success"></i>Increase 2.4%</p>
                    </div>
                    <div>
                      <span class="statistics-increase text-white">3</span>
                      <span class="statistics-increase text-white">5</span>
                      <span class="statistics-increase text-white">0</span>
                      <span class="statistics-increase text-white">2</span>
                      <span class="statistics-increase text-white">3</span>
                    </div>
                  </div>
              </div>
              <div>
                <div class="d-flex align-items-center justify-content-between">
                  <div class="mr-3">
                    <p class="font-weight-medium mb-0">Daily Statistics</p>
                    <p class="text-small mb-0"><i class="mdi mdi-arrow-bottom-right mr-2 text-danger"></i>decrease 2.4%</p>
                  </div>
                  <div>
                    <span class="statistics-decrease text-white">1</span>
                    <span class="statistics-decrease text-white">2</span>
                    <span class="statistics-decrease text-white">4</span>
                    <span class="statistics-decrease text-white">5</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card bg-primary text-white text-center">
                <div class="card-body">
                  <h1 class="font-weight-bold mb-4 pb-2 pt-4">Pro Plan </h1>
                  <h2 class="font-weight-bold display-3 mt-4 mb-4">$235</h2>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Overage Protection - 0 GB</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3  grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <div class="plan-icon-circle pt-3">
                    <i class="mdi mdi-server"></i>
                  </div>
                  <h1 class="font-weight-bold mb-2 text-dark">120 GB </h1>
                  <p class="text-muted mb-3">Bandwidth remaining</p>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Find more</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3  grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <div class="plan-icon-circle pt-3">
                    <i class="mdi mdi-database"></i>
                  </div>
                  <h1 class="font-weight-bold mb-2 text-dark">88.40 MB</h1>
                  <p class="text-muted mb-3">Storage disk used</p>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Find more</button>
                </div>
              </div>
            </div>
            <div class="col-sm-3  grid-margin stretch-card">
              <div class="card text-center">
                <div class="card-body">
                  <div class="plan-icon-circle pt-3">
                    <i class="mdi mdi-file-video"></i>
                  </div>
                  <h1 class="font-weight-bold mb-2 text-dark">0 Bytes</h1>
                  <p class="text-muted mb-3">Transcoding Credits</p>
                  <button type="button" class="btn btn-warning btn-sm text-white btn-rounded">Find more</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="customer-card">
                    <div class="d-xl-flex align-items-center mb-4">
                        <img src="https://via.placeholder.com/36x36" alt="profile">
                        <div class="mt-3 mt-xl-0">
                          <h4 class="text-dark">Frederick Carter</h4>
                          <p class="mb-0 text-muted">frederickcarter@kiehn.biz</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between customer-statistics">
                      <div>
                        <h4 class="text-dark">123</h4>
                        <p class="mb-0 text-muted">Orders</p>
                      </div>
                      <div>
                        <h4 class="text-dark">$1234</h4>
                        <p class="mb-0 text-muted">Revenue</p>
                      </div><div>
                        <h4 class="text-dark">$290</h4>
                        <p class="mb-0 text-muted">AOV</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="customer-card">
                    <div class="d-xl-flex align-items-center mb-4">
                        <img src="https://via.placeholder.com/36x36" alt="profile">
                        <div class="mt-3 mt-xl-0">
                          <h4 class="text-dark">Elnora Schwartz</h4>
                          <p class="mb-0 text-muted">elnora@sanford.me</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between customer-statistics">
                      <div>
                        <h4 class="text-dark">123</h4>
                        <p class="mb-0 text-muted">Orders</p>
                      </div>
                      <div>
                        <h4 class="text-dark">$19,200</h4>
                        <p class="mb-0 text-muted">Revenue</p>
                      </div><div>
                        <h4 class="text-dark">$551</h4>
                        <p class="mb-0 text-muted">AOV</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="customer-card">
                    <div class="d-xl-flex align-items-center mb-4">
                        <img src="https://via.placeholder.com/36x36" alt="profile">
                        <div class="mt-3 mt-xl-0">
                          <h4 class="text-dark">Landon Parker</h4>
                          <p class="mb-0 text-muted">landonparker@dallin.net</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between customer-statistics">
                      <div>
                        <h4 class="text-dark">87638</h4>
                        <p class="mb-0 text-muted">Orders</p>
                      </div>
                      <div>
                        <h4 class="text-dark">$24,583</h4>
                        <p class="mb-0 text-muted">Revenue</p>
                      </div><div>
                        <h4 class="text-dark">$964</h4>
                        <p class="mb-0 text-muted">AOV</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-danger">
                <div class="card-variant-triangle-danger"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">REVENUE</p>
                      <h4 class="text-dark  font-weight-medium">$25763</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-dark">
                  <div class="card-variant-triangle-dark"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">SALES</p>
                      <h4 class="text-dark  font-weight-medium">$22,500</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-info">
                <div class="card-variant-triangle-info"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">LIKES</p>
                      <h4 class="text-dark  font-weight-medium">421,215</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 grid-margin stretch-card">
              <div class="card card-variant-border-warning">
                  <div class="card-variant-triangle-warning"></div>
                <div class="card-body">
                  <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                    <i class="mdi mdi-arrow-top-right large-icons text-success mr-3"></i>
                    <div>
                      <p class="text-dark font-weight-medium">VISITS</p>
                      <h4 class="text-dark  font-weight-medium">21,215</h4>
                      <p class="text-muted text-small mb-0">(5.32% in last 30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="d-flex justify-content-between">
                        <h3 class="card-title mb-3">Sales Reports</h3>
                        <div class="dropdown">
                          <a class="btn p-0" href="#" data-toggle="dropdown" id="saleswidgetDropdown">
                              <i class="mdi mdi-dots-horizontal"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="saleswidgetDropdown">
                            <a class="dropdown-item">
                              <i class="mdi mdi-pencil text-primary"></i>
                              Edit
                            </a>
                            <a class="dropdown-item">
                              <i class="mdi mdi-delete  text-primary"></i>
                              Delete
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <p>Sales Performance for Online and Offline Revenue</p>
                      <div class="row pt-3 mt-md-4 mb-4">
                        <div class="col-6 grid-margin">
                          <div class="d-flex align-items-center">
                              <div id="circleProgress1" class="mr-3 mt-2 mt-lg-0 circle-progress-dimension"></div>
                              <div>
                                <h5 class="font-weight-medium text-dark">3456</h5>
                                <p class="font-weight-medium  mb-0">Opportunities</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-5 grid-margin">
                          <div class="d-flex align-items-center">
                              <div id="circleProgress2" class="mr-3 mt-2 mt-lg-0 circle-progress-dimension"></div>
                              <div>
                                <h5 class="font-weight-medium text-dark">865</h5>
                                <p class="font-weight-medium  mb-0">Proposal</p>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row pt-3 mt-md-2 mb-2">
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">110,000</h3>
                          <p>Number of sales</p>
                        </div>
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">$753,098</h3>
                          <p>Total sales</p>
                        </div>
                      </div>
                      <div class="row pt-3 mt-md-2 mb-0">
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">$523,200</h3>
                          <p>Average Sale</p>
                        </div>
                        <div class="col">
                          <h3 class="text-dark font-weight-bold mb-2">$331,886</h3>
                          <p>Finangel Free</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-8">
                      <div class="d-lg-flex align-items-center mt-3 mt-lg-0">
                        <div class="d-flex align-items-center mr-0 mr-lg-5 mb-3 mb-lg-0">
                          <span class="legend-label bg-primary mr-2"></span>
                          <p class="mb-0">Total Sales</p>
                        </div>
                        <div class="d-flex align-items-center mb-3 mb-lg-0">
                            <span class="legend-label bg-info mr-2"></span>
                            <p class="mb-0">Number of sales</p>
                          </div>
                      </div>
                      <div class="flot-chart-wrapper mt-2">
                        <div id="flotChart" class="flot-chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title mb-3">Marketing Trends</h3>
                    <div class="dropdown">
                      <a class="btn p-0" href="#" data-toggle="dropdown" id="marketingWidgetDropdown">
                          <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="marketingWidgetDropdown">
                        <a class="dropdown-item">
                          <i class="mdi mdi-pencil text-primary"></i>
                          Edit
                        </a>
                        <a class="dropdown-item">
                          <i class="mdi mdi-delete  text-primary"></i>
                          Delete
                        </a>
                      </div>
                    </div>
                  </div>
                  <p>How are your active users trending over time?</p>
                </div>
                <div class="dashboard-chart-wrap">
                  <canvas id="marketingTrend"></canvas>
                </div>

                <div class="card-body pt-3">
                  <div class="d-flex justify-content-between align-items-center py-4 border-bottom border-top mt-3">
                    <div class="d-flex align-items-center text-dark">
                      <i class="mdi mdi-google-chrome marketing-trend-icon mr-2" ></i>
                      <p class="mb-0">Conversion</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="text-dark mb-0 mr-2">4923</p>
                      <span class="text-muted mr-2">13% of target</span>
                      <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex align-items-center text-dark">
                      <i class="mdi mdi-account-box marketing-trend-icon mr-2" ></i>
                      <p class="mb-0">Impressions</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="text-dark mb-0 mr-2">87k</p>
                      <span class="text-muted mr-2">12% of target</span>
                      <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6  grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title mb-3">Traffic by Platform</h3>
                    <div class="dropdown">
                      <a class="btn p-0" href="#" data-toggle="dropdown" id="trafficWidgetDropdown">
                          <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="trafficWidgetDropdown">
                        <a class="dropdown-item">
                          <i class="mdi mdi-pencil text-primary"></i>
                          Edit
                        </a>
                        <a class="dropdown-item">
                          <i class="mdi mdi-delete  text-primary"></i>
                          Delete
                        </a>
                      </div>
                    </div>
                  </div>
                 <div class="dashboard-chart-wrap mt-0 mt-lg-5">
                  <canvas id="traffic-platform"></canvas>
                 </div>
                  <div class="d-flex justify-content-between align-items-center mt-5 py-4 border-bottom border-top">
                    <div class="d-flex align-items-center text-dark">
                      <i class="mdi mdi-desktop-mac marketing-trend-icon mr-2" ></i>
                      <p class="mb-0">Desktop Traffic</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <p class="text-dark mb-0 mr-2">4577K</p>
                      <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                  <div class="d-flex align-items-center text-dark">
                    <i class="mdi mdi-cellphone-android marketing-trend-icon mr-2" ></i>
                    <p class="mb-0">Mobile Traffic</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="text-dark mb-0 mr-2">524K</p>
                    <i class="mdi mdi-arrow-top-right marketing-trend-icon text-success"></i>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title mb-3">Performance Indicator</h3>
                    <div class="dropdown">
                      <a class="btn p-0" href="#" data-toggle="dropdown" id="performanceWidgetDropdown">
                          <i class="mdi mdi-dots-horizontal"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="performanceWidgetDropdown">
                        <a class="dropdown-item">
                          <i class="mdi mdi-pencil text-primary"></i>
                          Edit
                        </a>
                        <a class="dropdown-item">
                          <i class="mdi mdi-delete  text-primary"></i>
                          Delete
                        </a>
                      </div>
                    </div>
                  </div>
                  <canvas id="performance-indicator"></canvas>
                  <div class="performance-indicator-legend mt-4 d-flex justify-content-center align-items-center" id="chart-legends-performance">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4  grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title d-flex align-items-center mb-3"><i class="mdi mdi-file-image mdi-24px mr-2"></i>Your Photos</h3>
                      <div class="dropdown">
                        <a class="btn btn-link p-0 text-dark" href="#">
                            See All
                        </a>
                      </div>
                    </div>
                    <div class="image-gallery">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="https://via.placeholder.com/142x105" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Hand Held Devices</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="https://via.placeholder.com/142x105" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">One Color</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="https://via.placeholder.com/142x105" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Hand Held Devices</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="https://via.placeholder.com/142x105" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Office Life</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="https://via.placeholder.com/142x105" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Summer Tones</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="gallery-wrap text-white">
                              <img src="https://via.placeholder.com/142x105" alt="profile">
                              <div class="gallery-content">
                                <p class="main-caption">Eye Candy</p>
                                <p class="sub-caption">Curated by Andrew Neel</p>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved. Terms of use | Privacy Policy</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with Love</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{ asset('../../vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
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
</body>

</html>
