@extends('layouts.master')

@section('content')
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
@endsection
