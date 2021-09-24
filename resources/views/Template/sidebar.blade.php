<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            {{--sidebar auth  --}}
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Authentication
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            {{-- sub menu auth --}}
            <ul class="nav nav-treeview">
              <li>
                <router-link to="data-user" class="nav-link ">
                  <i class="fas fa-users nav-icon yellow"></i>
                  <p>Data User</p>
                </router-link>
              </li>
              <li>
                <router-link to="data-level" class="nav-link ">
                  <i class="fab fa-buffer nav-icon green"></i>
                  <p>Data Level</p>
                </router-link>
              </li>
              <li>
                <router-link to="#" class="nav-link">
                  <i class="fas fa-sign-out-alt nav-icon red"></i>
                  <p>Logout</p>
                </router-link>
              </li>
            </ul>
            {{-- /sub menu auth --}}
          </li>
          {{-- /sidebar auth --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
