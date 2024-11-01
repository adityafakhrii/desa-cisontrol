    <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" hx-boost="true">
        <ul class="nav">
          <li class="nav-item sidebar-profile mt-4">
            <a href="#">
              <div>
                <div class="mt-2">
                  <h3 class="mb-1 profile-name">Desa Cisontrol</h3>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.index') }}">
              <i class="mdi mdi-cards-variant menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-cards-variant menu-icon"></i>
              <span class="menu-title">eKTP (F.1.07)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-cards-variant menu-icon"></i>
              <span class="menu-title">Statistics Kependudukan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Kartu Keluarga</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Keterangan Kelahiran</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('master-kependudukan.index') }}">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Master Kependudukan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">NIK Bayi Sementara</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">No KK Sementara</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Permohonan Pindah</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title" style="font-size: 0.8rem">Pernyataan Perubahan Data</span>
            </a>
          </li>

          @auth
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">{{ auth()->user()->name }}</span>
            </a>
          </li>
          <li class="nav-item report-generator mt-4">

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger btn-icon-text w-100">
                    Logout
                </button>
            </form>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Login</span>
            </a>
          </li>
          @endauth

        </ul>
      </nav>
