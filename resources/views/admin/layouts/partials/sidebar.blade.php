  <!-- ============================================================== -->
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('dashboard.admin')}}" aria-expanded="false">
                    <i class="fa fa-home"></i>
                    <span class="hide-menu">Dashboard</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('notifications.admin')}}" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="hide-menu">Notifikasi</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('report.index')}}" aria-expanded="false">
                    <i class="fa fa-book"></i>
                    <span class="hide-menu">Daftar Pengaduan</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('confirm-officer.admin')}}" aria-expanded="false">
                    <i class="fa fa-check"></i>
                    <span class="hide-menu">Konfirmasi Petugas</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('data-map.admin')}}" aria-expanded="false">
                    <i class="fas fa-map"></i>
                    <span class="hide-menu">Data Peta</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('maps.admin')}}" aria-expanded="false">
                    <i class="fas fa-globe"></i>
                    <span class="hide-menu">Peta</span>
                  </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Authentication</span></li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="ticket-list.html" aria-expanded="false">
                    <i class="fas fa-user"></i>
                    <span class="hide-menu">Akun Pengguna</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link" href="{{ route('logout')}}" aria-expanded="false">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="hide-menu">Log out</span>
                  </a>
                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->