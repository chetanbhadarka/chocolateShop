<header class="main-header" style="background-color:#f3ce00">
    <!-- Logo -->
    <a href="index.html" class="logo" style="background-color:#f3ce00">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="background-color:#f3ce00;color:black;"><b>Admin</b> Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#f3ce00">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only" style="background-color:black;">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <h4><b style="color:black;">Hi <span class="hidden-xs">{{Session::get('adminnm')}}</span></b></h4>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/admin/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>

          </li>
        </ul>
      </div>
    </nav>
  </header>
