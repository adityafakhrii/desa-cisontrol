@extends('layouts.master')
@php
    \Carbon\Carbon::setLocale('id');
@endphp

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="d-xl-flex justify-content-between align-items-center mb-4 pb-2">
        <div class="text-dark">
          <h2 class="mb-1 font-weight-bold">Statistik Kependudukan!</h2>
          <p class="text-small mb-0">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 grid-margin stretch-card">
          <div class="card card-variant-border-danger">
            <div class="card-variant-triangle-danger"></div>
            <div class="card-body">
              <div class="d-xl-flex d-lg-block d-sm-block  d-flex align-items-center">
                <i class="mdi mdi-account-group-outline large-icons mr-3"></i>
                <div>
                  <p class="text-dark">Jumlah Penduduk</p>
                  <h1 class="text-dark font-weight-bold">2530</h1>
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
                <i class="mdi mdi-account-group-outline large-icons mr-3"></i>
                <div>
                    <p class="text-dark">Jumlah Dusun</p>
                    <h1 class="text-dark font-weight-bold">2530</h1>
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
                <i class="mdi mdi-account-group-outline large-icons mr-3"></i>
                <div>
                    <p class="text-dark">Jumlah RW</p>
                    <h1 class="text-dark font-weight-bold">2530</h1>
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
                <i class="mdi mdi-account-group-outline large-icons mr-3"></i>
                <div>
                    <p class="text-dark">Jumlah RT</p>
                    <h1 class="text-dark font-weight-bold">2530</h1>
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
