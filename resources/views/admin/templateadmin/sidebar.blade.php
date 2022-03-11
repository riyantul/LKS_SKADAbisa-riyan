     <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
                 <a href="/admin" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>Dashboard</p>
                 </a>
               </li>
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Kelola Website
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gallery</p>
                </a>
              </li>    
            </ul>
          </li>
          <li class="nav-item">
                <a href="/listuser" class="nav-link  {{ Request::is('dashboard/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>List User</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="/daftarkompetisi" class="nav-link  {{ Request::is('dashboard/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Daftar Kompetisi</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="/daftarpeserta" class="nav-link  {{ Request::is('dashboard/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Daftar Peserta</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="/daftarpenilaian" class="nav-link  {{ Request::is('dashboard/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-pen"></i>
                  <p>Penilaian</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="/laporan" class="nav-link  {{ Request::is('dashboard/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Laporan</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="/logout" class="nav-link  {{ Request::is('dashboard/list') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-arrow-left"></i>
                  <p>Logout</p>
                </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->