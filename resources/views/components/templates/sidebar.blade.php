<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/product') }}" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} | {{ Auth::user()->getRoleNames()[0] }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/product') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          @if(Auth::user()->getRoleNames()[0] == 'Super Admin')
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    User Management
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/role') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/pengguna') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>

            </ul>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Referensi
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/kategori') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/tags') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tags</p>
                </a>
              </li>

            </ul>


            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Master
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/berita') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
            </ul>






              @elseif(Auth::user()->getRoleNames()[0] == 'Admin')
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Referensi
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>


              @elseif(Auth::user()->getRoleNames()[0] == 'User')
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Data Referensi
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>



              @endif


            </ul>
          </li>






        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
