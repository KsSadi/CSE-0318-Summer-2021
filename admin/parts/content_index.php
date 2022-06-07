	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard Home
            <small>Overview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--li class="active">Home</li-->
          </ol>
        </section>

        <section class="content">
			<div class="row">
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $count['honours_application']; ?></h3>
                  <p>New Course Registration</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-text-o"></i>
                </div>
                <a href="<?php echo $admin_url ?>honours_applications.php" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php echo $count['students']; ?></h3>
                  <p>Students</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo $admin_url ?>students.php" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $count['public_notice']; ?></h3>
                  <p>Public Notices</p>
                </div>
                <div class="icon">
                  <i class="fa fa-files-o"></i>
                </div>
                <a href="<?php echo $admin_url ?>public_notices.php" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div>

        </section>
      </div>
