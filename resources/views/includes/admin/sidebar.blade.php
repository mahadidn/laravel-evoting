<!-- Sidebar -->
<ul class="navbar-nav bg-basecolor sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="beranda.php">
    <img src="/img/icon.ico" alt="icon" class="img-fluid" style="width: 1.7rem">
    <div class="sidebar-brand-text mx-3 fs-1 font-weight-bold">E-Voting</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
    <a class="nav-link"  href="/admin">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  

  <li class="nav-item {{ Request::is('admin/data-pemilih') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/data-pemilih">
      <i class="fas fa-address-card"></i>
      <span>Data Pemilih</span></a>
  </li>

 
  <li class="nav-item {{ Request::is('admin/data-kandidat*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/data-kandidat">
      <i class="fas fa-book"></i>
      <span>Data Kandidat</span></a>
  </li>

 
  <li class="nav-item {{ Request::is('admin/data-voting') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/data-voting">
      <i class="fas fa-address-card"></i>
      <span>Data Voting</span></a>
  </li>

 
  <li class="nav-item {{ Request::is('admin/rekapitulasi-voting') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/rekapitulasi-voting">
      <i class="fas fa-address-card"></i>
      <span>Rekapitulasi Voting</span></a>
  </li>

 
  <li class="nav-item {{ Request::is('admin/data-pengguna') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/data-pengguna">
      <i class="fas fa-address-card"></i>
      <span>Data Pengguna</span></a>
  </li>


  <li class="nav-item {{ Request::is('admin/ganti-password') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/ganti-password">
      <i class="fas fa-address-card"></i>
      <span>Ganti Password</span></a>
  </li>
  
  <!-- Logout-->
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-door-open"></i>
      <span>Logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo, {{ auth()->user()->username }}</span>
                <img class="img-profile rounded-circle" src="/img/kandidat.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
          <form action="/logout" method="POST">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
        </div>
        <div class="modal-body">Klik Keluar untuk mengakhiri sesi ini</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" name="logout_btn" class="btn btn-base">Keluar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
