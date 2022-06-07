  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header">
        <a href="<?php echo $admin_url ?>" class="logo"><b>SUB</b>Admin</a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/img/avatar5.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Portal Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="assets/img/avatar5.png" class="img-circle" alt="User Image" />
                    <p>
                      Admin
                      <small><?php echo APP_NAME ?> Dashboard</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="text-center">
                      <a href="<?php echo $admin_url ?>logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>