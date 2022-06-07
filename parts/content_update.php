
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
<section class="course_details_area section_gap"  style="background-color: #eee;">
                               <div class="col-sm-12 col-md-12">
							   
									<div class="col-lg-12 course_details_left"  style="background-color: white;">

									<div class="content_wrapper">
												
											<?php if(isset($message)) echo $message; ?>	
							<form class="form-horizontal" method="POST" action="" autocomplete="off">
								<div class="well">
									<fieldset>
										
										<div class="form-group <?php has_error($error['name_en']) ?>"></br>
											<h4 class="title">Edit Profile</h4>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_en" name="name_en" class="form-control" value="<?php get_value('name_en'); ?>" type="text" required>
												<?php error_message('name_en', $error['name_en']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['gender']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="gender">Gender</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												
														<select name="gender" id="gender" class="selectpicker form-control">
															<option>Select</option>
															<option value="Male" <?php echo_selected('Male', get_value('gender', false)) ?> >Male</option>
															<option value="Female"  <?php echo_selected('Female', get_value('gender', false)) ?> >Female</option>
															<option value="Others"  <?php echo_selected('Others', get_value('gender', false)) ?> >Others</option>
														</select>
														
														
														
														<?php error_message('gender', $error['gender']) ?>
													
											</div>
										</div>
										
										<div class="form-group <?php has_error($error['mail']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mail">E-Mail</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="mail" name="mail" class="form-control" value="<?php get_value('mail'); ?>" type="text" required>
												<?php error_message('mail', $error['mail']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['mobile']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mobile">Mobile No</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="mobile" name="mobile" class="form-control" value="<?php get_value('mobile_no'); ?>" type="text" placeholder="01XXXXXXXXX" required>
												<?php error_message('mobile', $error['mobile']) ?>
											</div>
										</div>
										
							
									</fieldset>
								</div>
								
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group">
													<label class="col-md-4 col-xs-6 control-label" for="admission_roll">Students ID</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="admission_roll" name="admission_roll" class="form-control" value="<?php get_value('admission_roll'); ?>" type="text" disabled>
													</div>
												</div>
												
												<div class="form-group <?php has_error($error['batch']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="batch">Batch</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="batch" name="batch" class="form-control" value="<?php get_value('batch'); ?>" type="text" required>
														<?php error_message('batch', $error['batch']) ?>
													</div>
												</div>
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['admission_year']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="admission_year">Admission Year</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="admission_year" name="admission_year" class="form-control" value="<?php get_value('admission_year'); ?>" type="text"  placeholder="2018" required>
														<?php error_message('admission_year', $error['admission_year']) ?>
													</div>
												</div>		
												


												
												
												<div class="form-group <?php has_error($error['dept_s']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="dept_s">Department</label>
													<div class="col-md-8 col-xs-6 input-group">
														<select name="dept_s" id="dept_s" class="selectpicker form-control">
															<option>Select</option>
															<option value="CSE"<?php echo_selected('CSE', get_value('dept_s', false)) ?> >Computer Science & Engineering </option>
															<option value="Pharmacy"<?php echo_selected('Pharmacy', get_value('dept_s', false)) ?> >Pharmacy</option>
															<option value="BBA"<?php echo_selected('BBA', get_value('dept_s', false)) ?> >BBA</option>
															<option value="Architecture"<?php echo_selected('Architecture', get_value('dept_s', false)) ?> >Architecture</option>
															
														</select>
														<?php error_message('dept_s', $error['dept_s']) ?>
													</div>
												</div>


												
											</fieldset>
										</div>
									</div>
								</div>
								
								
										<div class="well">
										<fieldset>
										
										
										
										<div class="form-group <?php has_error($error['name_f']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_f">Father's Name </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_f" name="name_f" class="form-control" value="<?php get_value('name_f'); ?>" type="text" required>
												<?php error_message('name_f', $error['name_f']) ?>
											</div>
										</div>
										
										<div class="form-group <?php has_error($error['occuption_f']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="occuption_f">Father's Occuption </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="occuption_f" name="occuption_f" class="form-control" value="<?php get_value('occuption_f'); ?>" type="text" required>
												<?php error_message('occuption_f', $error['occuption_f']) ?>
											</div>
										</div>
										
										
										<div class="form-group <?php has_error($error['name_m']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_m">Mother's Name </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_m" name="name_m" class="form-control" value="<?php get_value('name_m'); ?>" type="text" required>
												<?php error_message('name_m', $error['name_m']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['occuption_m']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="occuption_m">Mother's Occuption </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="occuption_m" name="occuption_m" class="form-control" value="<?php get_value('occuption_m'); ?>" type="text" required>
												<?php error_message('occuption_m', $error['occuption_m']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['name_g']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_g">Guardian Name </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_g" name="name_g" class="form-control" value="<?php get_value('name_g'); ?>" type="text" required>
												<?php error_message('name_g', $error['name_g']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['relation_g']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="relation_g">Relationship With Guardian </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="relation_g" name="relation_g" class="form-control" value="<?php get_value('relation_g'); ?>" type="text" required>
												<?php error_message('relation_g', $error['relation_g']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['mobile_g']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mobile_g">Guardian's Mobile </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="mobile_g" name="mobile_g" class="form-control" value="<?php get_value('mobile_g'); ?>" type="text" placeholder=""  required>
												<?php error_message('mobile_g', $error['mobile_g']) ?>
											</div>
										</div>
										
										
										
										
									</fieldset>
								</div>
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-12"><p><b>Present Address</b></p></div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['present_house']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="present_house">House</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="present_house" name="present_house" class="form-control" value="<?php get_value('present_house'); ?>" type="text" required>
														<?php error_message('present_house', $error['present_house']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['present_road']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="present_road">Road</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="present_road" name="present_road" class="form-control" value="<?php get_value('present_road'); ?>" type="text" required>
														<?php error_message('present_road', $error['present_road']) ?>
													</div>
												</div>
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['present_area']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="present_area">Area</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="present_area" name="present_area" class="form-control" value="<?php get_value('present_area'); ?>" type="text" required>
														<?php error_message('present_area', $error['present_area']) ?>
													</div>
												</div>		
												<div class="form-group <?php has_error($error['present_city']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="present_city">City</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="present_city" name="present_city" class="form-control" value="<?php get_value('present_city'); ?>" type="text" required>
														<?php error_message('present_city', $error['present_city']) ?>
													</div>
												</div>										
											</fieldset>
										</div>
									</div>
								</div>
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-12"><p><b>Permanent Address</b></p></div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['village']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="village">Village</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="village" name="village" class="form-control" value="<?php get_value('address_village'); ?>" type="text" required>
														<?php error_message('village', $error['village']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['upazilla']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="upazilla">Upazilla</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="upazilla" name="upazilla" class="form-control" value="<?php get_value('address_upazilla'); ?>" type="text" required>
														<?php error_message('upazilla', $error['upazilla']) ?>
													</div>
												</div>
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['post_office']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="post_office">Post Office</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="post_office" name="post_office" class="form-control" value="<?php get_value('address_postoffice'); ?>" type="text" required>
														<?php error_message('post_office', $error['post_office']) ?>
													</div>
												</div>		
												<div class="form-group <?php has_error($error['district']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="district">District</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="district" name="district" class="form-control" value="<?php get_value('address_district'); ?>" type="text" required>
														<?php error_message('district', $error['district']) ?>
													</div>
												</div>										
											</fieldset>
										</div>
									</div>
								</div>
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group date <?php has_error($error['birthdate']) ?>"  data-provide="datepicker">
													<label class="col-md-4 col-xs-6 control-label" for="birthdate">Date Of Birth</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="birthdate" name="birthdate" class="form-control" value="<?php echo date('d-m-Y', get_value('birthdate', false)); ?>" type="text" autocomplete="off" required >
														<?php error_message('birthdate', $error['birthdate']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['nationality']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="nationality">Nationality</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="nationality" name="nationality" class="form-control" value="<?php get_value('nationality'); ?>" type="text" required>
														<?php error_message('nationality', $error['nationality']) ?>
													</div>
												</div>
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['religion']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="religion">Religion</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="religion" name="religion" class="form-control" value="<?php get_value('religion'); ?>" type="text">
														<?php error_message('religion', $error['religion']) ?>
													</div>
												</div>		
											
											<div class="form-group <?php has_error($error['blood']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="blood">Blood</label>
													<div class="col-md-8 col-xs-6 input-group">
														<select name="blood" id="blood" class="selectpicker form-control">
															<option>Select</option>
															<option value="A+"<?php echo_selected('A+', get_value('blood', false)) ?>>A+</option>
															<option value="A-"<?php echo_selected('A-', get_value('blood', false)) ?>>A-</option>
															<option value="B+"<?php echo_selected('B+', get_value('blood', false)) ?>>B+</option>
															<option value="B-"<?php echo_selected('B-', get_value('blood', false)) ?>>B-</option>
															<option value="AB+"<?php echo_selected('AB+', get_value('blood', false)) ?>>AB+</option>
															<option value="AB-"<?php echo_selected('AB-', get_value('blood', false)) ?>>AB-</option>
															
														</select>
														<?php error_message('blood', $error['blood']) ?>
													</div>
											</div>



												
											</fieldset>
										</div>
									</div>
								</div>	
														
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<legend>SSC</legend>
												<div class="form-group <?php has_error($error['ssc_board']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_board">Board</label>
													<div class="col-md-8 col-xs-6 input-group">
														<select name="ssc_board" id="ssc_board" class="selectpicker form-control">
															<option> Select</option>
															<option value="Dhaka" <?php echo_selected('Dhaka', get_value('ssc_board', false)) ?>>Dhaka</option>
															<option value="Rajshahi" <?php echo_selected('Rajshahi', get_value('ssc_board', false)) ?>>Rajshahi</option>
															<option value="Comilla" <?php echo_selected('Comilla', get_value('ssc_board', false)) ?>>Comilla</option>
															<option value="Chittagong" <?php echo_selected('Chittagong', get_value('ssc_board', false)) ?>>Chittagong</option>
															<option value="Sylhet" <?php echo_selected('Sylhet', get_value('ssc_board', false)) ?>>Sylhet</option>
															<option value="Dinajpur" <?php echo_selected('Dinajpur', get_value('ssc_board', false)) ?>>Dinajpur</option>
															<option value="Jessore" <?php echo_selected('Jessore', get_value('ssc_board', false)) ?>>Jessore</option>
															<option value="Barisal" <?php echo_selected('Barisal', get_value('ssc_board', false)) ?>>Barisal</option>
															<option value="Madrasa" <?php echo_selected('Madrasa', get_value('ssc_board', false)) ?>>Madrasa</option>
														</select>
														<?php error_message('ssc_board', $error['ssc_board']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_year']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_year">Passed Year</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_year" name="ssc_year" class="form-control" value="<?php get_value('ssc_year'); ?>" type="text" placeholder="2010" required>
														<?php error_message('ssc_year', $error['ssc_year']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_roll']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_roll">Roll</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_roll" name="ssc_roll" class="form-control" value="<?php get_value('ssc_roll'); ?>" type="text"  placeholder="123456" required>
														<?php error_message('ssc_roll', $error['ssc_roll']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_grade']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_grade">Grade</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_grade" name="ssc_grade" class="form-control" value="<?php get_value('ssc_grade'); ?>" type="text" placeholder="A+" required>
														<?php error_message('ssc_grade', $error['ssc_grade']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_gpa']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_gpa">GPA</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_gpa" name="ssc_gpa" class="form-control" required="true" value="<?php get_value('ssc_gpa'); ?>" placeholder="5.00" type="text">
														<?php error_message('ssc_gpa', $error['ssc_gpa']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['institute_ssc']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="institute_ssc">Institute</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="institute_ssc" name="institute_ssc" class="form-control" required="true" value="<?php get_value('institute_ssc'); ?>" placeholder="" type="text">
														<?php error_message('institute_ssc', $error['institute_ssc']) ?>
													</div>
												</div>
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<legend>HSC</legend>
												<div class="form-group <?php has_error($error['hsc_board']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_board">Board</label>
													<div class="col-md-8 col-xs-6 input-group">
														<select name="hsc_board" id="hsc_board" class="selectpicker form-control">
															<option> Select</option>
															<option value="Dhaka" <?php echo_selected('Dhaka', get_value('hsc_board', false)) ?>>Dhaka</option>
															<option value="Rajshahi" <?php echo_selected('Rajshahi', get_value('hsc_board', false)) ?>>Rajshahi</option>
															<option value="Comilla" <?php echo_selected('Comilla', get_value('hsc_board', false)) ?>>Comilla</option>
															<option value="Chittagong" <?php echo_selected('Chittagong', get_value('hsc_board', false)) ?>>Chittagong</option>
															<option value="Sylhet" <?php echo_selected('Sylhet', get_value('hsc_board', false)) ?>>Sylhet</option>
															<option value="Dinajpur" <?php echo_selected('Dinajpur', get_value('hsc_board', false)) ?>>Dinajpur</option>
															<option value="Jessore" <?php echo_selected('Jessore', get_value('hsc_board', false)) ?>>Jessore</option>
															<option value="Barisal" <?php echo_selected('Barisal', get_value('hsc_board', false)) ?>>Barisal</option>
															<option value="Madrasa" <?php echo_selected('Madrasa', get_value('hsc_board', false)) ?>>Madrasa</option>
														</select>
														<?php error_message('hsc_board', $error['hsc_board']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_year']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_year">Passed Year</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_year" name="hsc_year" class="form-control" value="<?php get_value('hsc_year'); ?>"  placeholder="2012" type="text" required>
														<?php error_message('hsc_year', $error['hsc_year']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_roll']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_roll">Roll</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_roll" name="hsc_roll" class="form-control" value="<?php get_value('hsc_roll'); ?>" type="text"  placeholder="123456" required>
														<?php error_message('hsc_roll', $error['hsc_roll']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_grade']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_grade">Grade</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_grade" name="hsc_grade" class="form-control" value="<?php get_value('hsc_grade'); ?>"  placeholder="A+" type="text" required>
														<?php error_message('hsc_grade', $error['hsc_grade']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_gpa']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_gpa">GPA</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_gpa" name="hsc_gpa" class="form-control" value="<?php get_value('hsc_gpa'); ?>" type="text"  placeholder="5.00" required>
														<?php error_message('hsc_gpa', $error['hsc_gpa']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['institute_hsc']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="institute_ssc">Institute</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="institute_hsc" name="institute_hsc" class="form-control" required="true" value="<?php get_value('institute_hsc'); ?>" placeholder="" type="text">
														<?php error_message('institute_hsc', $error['institute_hsc']) ?>
													</div>
												</div>
												
											</fieldset>

										</div>
									</div>
								</div>
							

								<p class="text-center ">
									<button class="btn btn-success" name="submit" role="button"><i class="fa fa-user-plus"></i> Update</button>
								</p>
</br>
						   
						   </form>
						
						</div>
						</div>
						
						</div>
								</section>	
												
													
												


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