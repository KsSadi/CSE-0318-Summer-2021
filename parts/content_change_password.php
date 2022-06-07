
	<body>		
			<div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
	
	
		    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

       <?php if(is_logged_in()) : ?>
			<?php
				$admission_roll =  current_user();
				$user_info = get_user_info(array('name_en', 'picture'), $admission_roll);
				$info = get_user_info(array(), current_user());
				
				$sql = "SELECT id FROM private_notice WHERE admission_roll='$admission_roll' AND is_read='0'";
				$query = mysqli_query($conn, $sql);
				$unread_count = mysqli_num_rows($query);
			?>
			
			
			
			
			
			
			

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                
                <div class="container">
                    <div class="row layout-spacing">

                        <!-- Profile Header -->
                        <div class="col-sm-12">
                            <div id="profile-header" class="" style="background: #fff url(<?php echo APP_URL ?>assets/img/header.jpeg) no-repeat center center;background-size: cover;">
                                <div class="row">
                                    <div class=" profile-section col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media ml-sm-5 ml-1">
                                                    <img class="mr-sm-3 mr-2 usr-img" src="<?php echo APP_URL.$user_info['picture']; ?>" alt="usr-img">
                                                    <div class="media-body">
                                                        <h5 class="usr-name"><?php echo $user_info['name_en']; ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="social-contacts">
                                                   
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Profile Header -->

                        <!-- Nav Tabs -->
                        <div class="col-sm-12">
                            <div class="nav-tab-section">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-2 col-sm-4 col-12 ml-auto usr-loc-join text-sm-left text-center">
                                        <h4><?php echo current_user(); ?></h4>
                                    </div>
                                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-8 col-12">
                                        <ul class="nav nav-pills justify-content-xl-end justify-content-lg-start justify-content-md-start justify-content-sm-start justify-content-center mt-2" id="pills-tab1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="" data-toggle="" href="<?php echo APP_URL ?>" role="tab" aria-selected="false"><i class="flaticon-user-fill"></i> Profile</a>
                                            </li>
                                           
                                            <li class="nav-item">
                                                <a class="nav-link active" id="" data-toggle="" href="<?php echo APP_URL ?>update-profile" role="tab" aria-selected="false"><i class="flaticon-settings-7"></i> Edit Profile</a>
                                            </li>
											<li class="nav-item">
                                                <a class="nav-link" id="" data-toggle="" href="<?php echo APP_URL ?>logout" role="tab" aria-selected="false"><i class="flaticon-logout"></i> Logout</a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Nav Tabs -->

                      
                        <div class="col-sm-12 mt-5">
                            <div class="row">
							  <!-- Left Side Content -->
							  
								<?php include('parts/leftside.php');
								
								?>
							  <!-- Left Side Content -->
							
						<!-- Main Content-->
                                <div class="col-xl-6 order-xl-0 col-lg-12 order-1 col-md-12 col-sm-12">
                                    <div class="tab-content post-section" id="pills-tabContent1">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                            <div class="row">
					
												
													
							<form class="form-horizontal" method="POST" action="" autocomplete="off">
								<div class="well">
									<fieldset>
										<legend>Change Password</legend>
										<div class="form-group <?php has_error($error['password_old']) ?>">
											<label class="col-md-12 col-sm-12 col-xs-12 control-label" for="password_old">Current Password</label>
											<div class="col-md-12 col-sm-12 col-xs-12 input-group">
												<input id="password_old" name="password_old" class="form-control" value="" type="password" cool>
												<?php error_message('password_old', $error['password_old']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['password']) ?>">
											<label class="col-md-12 col-sm-12 col-xs-12 control-label" for="password">New Password</label>
											<div class="col-md-12 col-sm-12 col-xs-12 input-group">
												<input id="password" name="password" class="form-control" value="" type="password" cool>
												<?php error_message('password', $error['password']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['password2']) ?>">
											<label class="col-md-12 col-sm-12 col-xs-12 control-label" for="password2">Confirm Password</label>
											<div class="col-md-12 col-sm-12 col-xs-12 input-group">
												<input id="password2" name="password2" class="form-control" value="" type="password" onkeyup='check();' cool>
												<?php error_message('password2', $error['password2']) ?>
											</div>
										</div>
									</fieldset>
								</div>

								<p class="text-center ">
									<button class="btn btn-success" name="submit" role="button">Update</button>
								</p>
								</br>
						   </form>


                                                   <!--End-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									
									<!--Right Side Content-->
<!--Right Side Content-->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
								<div class="search-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0" style="margin-bottom:5px;margin-top:30px;margin-left:8px;margin-right:20px;">
                                        <button type="button" class="btn btn-info mb-4 mr-2 rounded bs-tooltip ml-2" style="width:100%;">
                                           <a style="color:white;" href="<?php echo APP_URL ?>change-picture/">Change Profile Picture</a>
                                        </button>
										 <button type="button" class="btn btn-primary mb-4 mr-2 rounded bs-tooltip ml-2" style="width:100%;">
                                           <a style="color:white;" href="<?php echo APP_URL ?>change-password/">Change Password</a>
                                        </button>
										
                                
                                            </div>
                                        </div>
                                    </div>

										<div class="slideshow-section mb-4">
											<div class="card" style="">
												<div class="card-body p-0">
													<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner">
															<div class="carousel-item active">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s4.jpg" alt="First slide">
															</div>
															
															
															<div class="carousel-item">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s1.png" alt="First slide">
															</div>
															<div class="carousel-item">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s2.jpg" alt="Second slide">
															</div>
															<div class="carousel-item">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s3.jpg" alt="Third slide">
															</div>
														</div>
														<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
															<span class="icon flaticon-left-arrow" aria-hidden="true"></span>
															<span class="sr-only">Previous</span>
														</a>
														<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
															<span class="icon flaticon-right-arrow" aria-hidden="true"></span>
															<span class="sr-only">Next</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									  <div class="active-feeds-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="">Educational Activity</h4>

                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="<?php echo APP_URL.$info['picture']; ?>" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented"><?php echo $info['name_en']; ?></span> <br>  is now studying <?php echo $info['dept_s']; ?> from  <span class="comment-topic">State University Of Bangladesh</span>  </h5>
                                                        <p class="meta-time"><?php echo $info['admission_year']; ?> - Present</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="<?php echo APP_URL.$info['picture']; ?>" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented"><?php echo $info['name_en']; ?></span> <br> passed H.S.C on  <?php echo $info['hsc_year']; ?> with  <?php echo $info['hsc_gpa']; ?> from <span class="comment-topic"><?php echo $info['institute_hsc']; ?></span> </h5>
                                                        
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="<?php echo APP_URL.$info['picture']; ?>" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented"><?php echo $info['name_en']; ?></span> <br> passed S.S.C on  <?php echo $info['ssc_year']; ?> with  <?php echo $info['ssc_gpa']; ?> from <span class="comment-topic"><?php echo $info['institute_ssc']; ?></span> </h5>
                                                        
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0" style="margin-bottom:5px;margin-top:30px;margin-left:8px;margin-right:20px;">
                                        <button type="button" class="btn btn-danger mb-4 mr-2 rounded bs-tooltip ml-2" style="width:100%;">
                                           <a style="color:white;" href="<?php echo APP_URL ?>calculator.php">Semester Fee Calculation</a>
                                        </button>
										
										
                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="calendar-section mb-4">
                                        <div class="card pb-3" style="">
                                            <div class="card-body">
                                                <div id="calendar" class="bx-top-6">
                                                    <div class="pb-5 mb-2 bx-top-6">
                                                        <div id="monthrow" class="bx-top-6">
                                                            <button id="prev" onclick="prevMonth()">&#10094;</button>
                                                            <span id="monthc"></span>
                                                            <button id="next" onclick="nextMonth()">&#10095;</button>
                                                        </div>
                                                        <div class="daysoftheweek">
                                                            <div>Su</div>
                                                            <div>Mo</div>
                                                            <div>Tu</div>
                                                            <div>We</div>
                                                            <div>Th</div>
                                                            <div>Fr</div>
                                                            <div>Sa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="slideshow-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s4.jpg" alt="First slide">
                                                        </div>
														
														
														<div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s1.png" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s2.jpg" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s3.jpg" alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                        <span class="icon flaticon-left-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="icon flaticon-right-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  
                                </div>
								    <!--  END Right Side CONTENT PART  -->
									
                                </div>
                          

						   </div>
                        </div>
						 
			
			

                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    		<?php endif; ?>	