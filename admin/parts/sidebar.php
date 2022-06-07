<?php 
$sql_sidebar = "SELECT id FROM improvement_application WHERE status='0'";
$improvement_pending_count = mysqli_num_rows(mysqli_query($conn, $sql_sidebar));
$sql_sidebar = "SELECT id FROM honours_application WHERE status='0'";
$honours_pending_count = mysqli_num_rows(mysqli_query($conn, $sql_sidebar));
$sql_sidebar = "SELECT id FROM masters_application WHERE status='0'";
?><aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="assets/img/avatar5.png" class="img-circle" alt="Admin" />
            </div>
            <div class="pull-left info">
              <p>SUB Admin</p>
              <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <form action="<?php echo $admin_url ?>students.php" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search students..." value=""/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <ul class="sidebar-menu">
            <li class="header">OPTIONS</li>
			<li class="<?php nav_active('index.php') ?>"><a href="<?php echo $admin_url ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li class="<?php nav_active('students.php'); nav_active('student_edit.php') ?>"><a href="<?php echo $admin_url ?>students.php"><i class="fa fa-users"></i> <span>Students</span></a></li>
			<li class="header">APPLICATIONS</li>
			
			<li class="treeview <?php nav_active('honours_applications.php'); ?>">
              <a href="#"><span>Pre Registration Applications</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo $admin_url ?>honours_applications.php">All Applications</a></li>
                <li><a href="<?php echo $admin_url ?>honours_applications.php?q=Pending">Pending Applications <span class="label pull-right bg-red"><?php echo $honours_pending_count ?></span></a></li>
              </ul>
            </li>
			
			<li class="header ">NOTICES</li>
            <li class="treeview <?php nav_active('private_notices.php'); nav_active('public_notices.php') ?>">
              <a href="#"><span>Notices</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
               
                <li><a href="<?php echo $admin_url ?>public_notices.php">Public Notices</a></li>
              </ul>
            </li>
			<li class="treeview <?php nav_active('add_private_notice.php') ?> <?php nav_active('add_public_notice.php') ?>">
              <a href="#"><span>Add new</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
               
                <li><a href="<?php echo $admin_url ?>add_public_notice.php">Public Notice</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </aside>