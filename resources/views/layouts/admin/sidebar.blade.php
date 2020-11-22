<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Teacher Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/images/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a class="d-block" href="">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users_get') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>All Teachers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('add-new-course') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Add Courses</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('all-courses') }}"class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>All Courses</p>
                    </a>
                </li>

            <li class="nav-item">
                <p href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link"><i class="nav-icon fas fa-th"></i>Home</p>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>


            <li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
