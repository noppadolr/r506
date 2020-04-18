  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">R-506</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        
        <div class="user-panel mt-3 mb-3 d-flex">   
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                            <div class="image">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                            </div>
                            <div class="info">
                                <a href="#" class="d-block">Alexander Pierce</a>
                            </div>
                             @else
                                {{-- <a href="{{ route('login') }}">Login</a>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-circle text-danger"></i>
                                    <p class="text">Important</p>
                                    </a>
                                </li> --}} 
                                <div class="info">
                                     <a href="" class="d-block">ท่านยังไม่ได้ Login</a>
                                 </div>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif --}}
                            @endauth
                        </div>
                    @endif
        </div>

      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
                </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Login
                <span class="right badge badge-danger">เข้าระบบ</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>