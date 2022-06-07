<!doctype html>
<html>
<head>
		<title>
			<?php echo $title ?>
		</title>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<link media="all" type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/css/style.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/css/bootstrap.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/vendors/linericonstyle.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/css/font-awesome.min.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/vendors/owl-carousel/owl.carousel.min.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/vendors/lightbox/simpleLightbox.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/vendors/nice-select/css/nice-select.css">
		<link media="all" type="text/css" rel="stylesheet" href="<?php echo APP_URL ?>csss/vendors/animate-css/animate.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>	
			
			
		


<header class="header_area">

<div class="main_menu">

<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="<?php echo APP_URL ?>"><img src="<?php echo APP_URL ?>img/logo.png" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<div class="collapse navbar-collapse offset" id="navbarSupportedContent">

<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>">Home</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>calculator.php">Fees Calculator</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>notices/">Notice</a></li>


<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>registration/">Registration</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>login/">Login</a></li>
</ul>


	

</div>

</div>
</nav>
</div>
</header>
	
                



				<section class="course_details_area section_gap"  style="background-color: #eee;">
<div class="container">
<div class="row">
<div class="col-lg-8 course_details_left"  style="background-color: white;">

<div class="content_wrapper">
<h4 class="title">Registration form</h4>
<div class="content">  


            <div class="panel panel-default full-height">
                <div class="panel-body">
					<?php if(isset($message)) echo $message; ?>
           
                    <div class="row">
						<div class="col-sm-12 col-md-12">
							<form class="form-horizontal" method="POST" action="" autocomplete="off">
								<div class="well">
									<fieldset>
										
										<div class="form-group <?php has_error($error['name_en']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_en">Student Name</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_en" name="name_en" class="form-control" value="<?php retrieve_value('name_en'); ?>" type="text" required>
												<?php error_message('name_en', $error['name_en']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['gender']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="gender">Gender</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												
														<select name="gender" id="gender" class="selectpicker form-control">
															<option>Select</option>
															<option value="Male">Male</option>
															<option value="Female">Female</option>
															<option value="Others">Others</option>
														</select>
														<?php error_message('gender', $error['gender']) ?>
													
											</div>
										</div>
										<div class="form-group <?php has_error($error['mail']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mail">E-Mail</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="mail" name="mail" class="form-control" value="<?php retrieve_value('mail'); ?>" type="text" required>
												<?php error_message('mail', $error['mail']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['mobile']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mobile">Mobile No</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="mobile" name="mobile" class="form-control" value="<?php retrieve_value('mobile'); ?>" type="text" placeholder="01XXXXXXXXX" required>
												<?php error_message('mobile', $error['mobile']) ?>
											</div>
										</div>
										
										</div>
									</fieldset>
									
									<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['admission_roll']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="admission_roll">Student ID </label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="admission_roll" name="admission_roll" class="form-control" value="<?php retrieve_value('admission_roll'); ?>" type="text" placeholder="UG02-47-18-000"  required>
														<?php error_message('admission_roll', $error['admission_roll']) ?>
													</div>
												</div>
												
												<div class="form-group <?php has_error($error['batch']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="batch">Batch</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="batch" name="batch" class="form-control" value="<?php retrieve_value('batch'); ?>" type="text" required>
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
														<input id="admission_year" name="admission_year" class="form-control" value="<?php retrieve_value('admission_year'); ?>" type="text"  placeholder="2018" required>
														<?php error_message('admission_year', $error['admission_year']) ?>
													</div>
												</div>		
												


												
												
												<div class="form-group <?php has_error($error['dept_s']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="dept_s">Department</label>
													<div class="col-md-8 col-xs-6 input-group">
														<select name="dept_s" id="dept_s" class="selectpicker form-control">
															<option>Select</option>
															<option value="CSE">Computer Science & Engineering </option>
															<option value="Pharmacy">Pharmacy</option>
															<option value="BBA">BBA</option>
															<option value="Architecture">Architecture</option>
															
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
												<input id="name_f" name="name_f" class="form-control" value="<?php retrieve_value('name_f'); ?>" type="text" required>
												<?php error_message('name_f', $error['name_f']) ?>
											</div>
										</div>
										
										<div class="form-group <?php has_error($error['occuption_f']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="occuption_f">Father's Occuption </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="occuption_f" name="occuption_f" class="form-control" value="<?php retrieve_value('occuption_f'); ?>" type="text" required>
												<?php error_message('occuption_f', $error['occuption_f']) ?>
											</div>
										</div>
										
										
										<div class="form-group <?php has_error($error['name_m']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_m">Mother's Name </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_m" name="name_m" class="form-control" value="<?php retrieve_value('name_m'); ?>" type="text" required>
												<?php error_message('name_m', $error['name_m']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['occuption_m']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="occuption_m">Mother's Occuption </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="occuption_m" name="occuption_m" class="form-control" value="<?php retrieve_value('occuption_m'); ?>" type="text" required>
												<?php error_message('occuption_m', $error['occuption_m']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['name_g']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_g">Guardian Name </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_g" name="name_g" class="form-control" value="<?php retrieve_value('name_g'); ?>" type="text" required>
												<?php error_message('name_g', $error['name_g']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['relation_g']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="relation_g">Relationship With Guardian </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="relation_g" name="relation_g" class="form-control" value="<?php retrieve_value('relation_g'); ?>" type="text" required>
												<?php error_message('relation_g', $error['relation_g']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['mobile_g']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mobile_g">Guardian's Mobile </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="mobile_g" name="mobile_g" class="form-control" value="<?php retrieve_value('mobile_g'); ?>" type="text" placeholder="01XXXXXXXXX"  required>
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
														<input id="present_house" name="present_house" class="form-control" value="<?php retrieve_value('present_house'); ?>" type="text" required>
														<?php error_message('present_house', $error['present_house']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['present_road']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="present_road">Road</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="present_road" name="present_road" class="form-control" value="<?php retrieve_value('present_road'); ?>" type="text" required>
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
														<input id="present_area" name="present_area" class="form-control" value="<?php retrieve_value('present_area'); ?>" type="text" required>
														<?php error_message('present_area', $error['present_area']) ?>
													</div>
												</div>		
												<div class="form-group <?php has_error($error['present_city']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="present_city">City</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="present_city" name="present_city" class="form-control" value="<?php retrieve_value('present_city'); ?>" type="text" required>
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
														<input id="village" name="village" class="form-control" value="<?php retrieve_value('village'); ?>" type="text" required>
														<?php error_message('village', $error['village']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['upazilla']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="upazilla">Upazilla</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="upazilla" name="upazilla" class="form-control" value="<?php retrieve_value('upazilla'); ?>" type="text" required>
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
														<input id="post_office" name="post_office" class="form-control" value="<?php retrieve_value('post_office'); ?>" type="text" required>
														<?php error_message('post_office', $error['post_office']) ?>
													</div>
												</div>		
												<div class="form-group <?php has_error($error['district']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="district">District</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="district" name="district" class="form-control" value="<?php retrieve_value('district'); ?>" type="text" required>
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
													<label class="col-md-4 col-xs-6 control-label" for="birthdate">Dtate Of Birth</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="birthdate" name="birthdate" class="form-control" value="<?php retrieve_value('birthdate'); ?>" type="text" autocomplete="off" required >
														<?php error_message('birthdate', $error['birthdate']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['nationality']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="nationality">Nationality</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="nationality" name="nationality" class="form-control" value="<?php retrieve_value('nationality'); ?>" type="text" required>
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
														<input id="religion" name="religion" class="form-control" value="<?php retrieve_value('religion'); ?>" type="text">
														<?php error_message('religion', $error['religion']) ?>
													</div>
												</div>		
											
											<div class="form-group <?php has_error($error['blood']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="blood">Blood</label>
													<div class="col-md-8 col-xs-6 input-group">
														<select name="blood" id="blood" class="selectpicker form-control">
															<option>Select</option>
															<option value="A+">A+</option>
															<option value="A-">A-</option>
															<option value="B+">B+</option>
															<option value="B-">B-</option>
															<option value="AB+">AB+</option>
															<option value="AB-">AB-</option>
															
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
															<option>Select</option>
															<option value="Dhaka">Dhaka</option>
															<option value="Rajshahi">Rajshahi</option>
															<option value="Comilla">Comilla</option>
															<option value="Chittagong">Chittagong</option>
															<option value="Sylhet">Sylhet</option>
															<option value="Dinajpur">Dinajpur</option>
															<option value="Jessore">Jessore</option>
															<option value="Barisal">Barisal</option>
															<option value="Madrasa">Madrasa</option>
														</select>
														<?php error_message('ssc_board', $error['ssc_board']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_year']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_year">Passed Year</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_year" name="ssc_year" class="form-control" value="<?php retrieve_value('ssc_year'); ?>" type="text" placeholder="2010" required>
														<?php error_message('ssc_year', $error['ssc_year']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_roll']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_roll">Roll</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_roll" name="ssc_roll" class="form-control" value="<?php retrieve_value('ssc_roll'); ?>" type="text"  placeholder="123456" required>
														<?php error_message('ssc_roll', $error['ssc_roll']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_grade']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_grade">Grade</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_grade" name="ssc_grade" class="form-control" value="<?php retrieve_value('ssc_grade'); ?>" type="text" placeholder="A+" required>
														<?php error_message('ssc_grade', $error['ssc_grade']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_gpa']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_gpa">GPA</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_gpa" name="ssc_gpa" class="form-control" required="true" value="<?php retrieve_value('ssc_gpa'); ?>" placeholder="5.00" type="text">
														<?php error_message('ssc_gpa', $error['ssc_gpa']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['institute_ssc']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="institute_ssc">Institute</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="institute_ssc" name="institute_ssc" class="form-control" required="true" value="<?php retrieve_value('institute_ssc'); ?>" placeholder="" type="text">
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
															<option>Select</option>
															<option value="Dhaka">Dhaka</option>
															<option value="Rajshahi">Rajshahi</option>
															<option value="Comilla">Comilla</option>
															<option value="Chittagong">Chittagong</option>
															<option value="Sylhet">Sylhet</option>
															<option value="Dinajpur">Dinajpur</option>
															<option value="Jessore">Jessore</option>
															<option value="Barisal">Barisal</option>
															<option value="Madrasa">Madrasa</option>
														</select>
														<?php error_message('hsc_board', $error['hsc_board']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_year']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_year">Passed Year</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_year" name="hsc_year" class="form-control" value="<?php retrieve_value('hsc_year'); ?>"  placeholder="2012" type="text" required>
														<?php error_message('hsc_year', $error['hsc_year']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_roll']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_roll">Roll</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_roll" name="hsc_roll" class="form-control" value="<?php retrieve_value('hsc_roll'); ?>" type="text"  placeholder="123456" required>
														<?php error_message('hsc_roll', $error['hsc_roll']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_grade']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_grade">Grade</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_grade" name="hsc_grade" class="form-control" value="<?php retrieve_value('hsc_grade'); ?>"  placeholder="A+" type="text" required>
														<?php error_message('hsc_grade', $error['hsc_grade']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['hsc_gpa']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="hsc_gpa">GPA</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="hsc_gpa" name="hsc_gpa" class="form-control" value="<?php retrieve_value('hsc_gpa'); ?>" type="text"  placeholder="5.00" required>
														<?php error_message('hsc_gpa', $error['hsc_gpa']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['institute_hsc']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="institute_hsc">Institute</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="institute_hsc" name="institute_hsc" class="form-control" required="true" value="<?php retrieve_value('institute_hsc'); ?>" placeholder="" type="text">
														<?php error_message('institute_hsc', $error['institute_hsc']) ?>
													</div>
												</div>
												
												
											</fieldset>

										</div>
									</div>
								</div>
									
								<div class="well">
									<fieldset>
										<legend>Login Details</legend>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="username">User Name</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="username" placeholder="Your Student ID" name="username" class="form-control" type="text" disabled>
											</div>
										</div>
										<div class="form-group <?php has_error($error['password']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="password">Password</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="password" name="password" class="form-control" value="" type="password" required>
												<?php error_message('password', $error['password']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['password2']) ?>">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="password2">Confirm Password</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="password2" name="password2" class="form-control" value="" type="password" onkeyup='check();' required>
												<?php error_message('password2', $error['password2']) ?>
												<span id="message"></span>
											</div>
										</div>
									</fieldset>
								</div>

								
								<p class="text-center ">
									<button class="btn btn-success" name="submit" role="button"><i class="fas fa-user-plus"></i> Register</button>
								</p>

						   
						   </form>
						</div>
					</div>
                </div>
            </div>
         </div>
            </div>
			</div>
			
			<?php 
			
			include('parts/sidebar.php'); ?>
			
			
			
            </div>
			</div>
            </section>
			
		