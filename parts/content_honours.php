    <html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo $description ?>">
		<link rel="icon" href="<?php echo APP_URL ?>favicon.ico">

		<title>
			<?php echo $title ?>
		</title>
		<link rel="icon" type="image/x-icon" href="<?php echo APP_URL ?>assets/img/favicon.ico"/>
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
<?php if( !is_logged_in() ) : ?>
<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>">Home</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>calculator.php">Fees Calculator</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>notices/">Notice</a></li>


<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>registration/">Registration</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>login/">Login</a></li>
</ul>

<?php else : ?>

<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>">Profile</a></li>
<li class="nav-item submenu dropdown">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">From Fill-Up</a>
<ul class="dropdown-menu">
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>honours-form-fill-up/">Pre Registration</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>honours-application-list/">Application List</a></li>
</ul>
</li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>notices/">Notices</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>logout/">Logout</a></li>


</ul>
	<?php endif; ?>

</div>

</div>
</nav>
</div>
</header>   
		 
		 
		 <section class="course_details_area section_gap"  style="background-color: #eee;">
<div class="container">
<div class="row">
<div class="col-lg-10 course_details_left"  style="background-color: white;">

<div class="content_wrapper">
<h4 class="title">Course Registration Form</h4>
<div class="content">  

		   <div class="panel panel-default full-height">
                <div class="panel-body">
					<?php if(isset($message)) echo $message; ?>
               
                    <div class="row">
						<div class="col-sm-12 col-md-12">
							<form class="form-horizontal" method="POST" action="" autocomplete="off">
								<div class="well">
									<fieldset>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="admission_roll">Students ID  </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="admission_roll" name="admission_roll" class="form-control" value="<?php get_value('admission_roll'); ?>" type="text" disabled>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_en">Name</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="name_en" name="name_en" class="form-control" value="<?php echo strtoupper(get_value('name_en', false)); ?>" type="text" disabled>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mobile_no">Mobile  </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="mobile_no" name="mobile_no" class="form-control" value="<?php get_value('mobile_no'); ?>" type="text" disabled>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="dept_s">Department </label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="dept_s" name="dept_s" class="form-control" value="<?php get_value('dept_s'); ?>" type="text" disabled>
											</div>
										</div>
									</fieldset>
								</div>
								
								
								
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<fieldset>
											
												
												
												<div class="form-group <?php has_error($error['semester_month']) ?>">
													<label class="col-md-4 col-xs-12 control-label" for="semester_month">Semester</label>
													<div class="col-md-8 col-xs-12 input-group">
														<select name="semester_month" id="semester_month" class="selectpicker form-control">
															<option value="">Select</option>
															<option value="Spring">Spring</option>
															<option value="Summer">Summer</option>
															<option value="Fall">Fall</option>
														</select>
														<?php error_message('semester_month', $error['semester_month']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['year_date']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="year_date">Year</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="year_date" name="year_date" class="form-control" value="<?php retrieve_value('year_date'); ?>" type="text" required>
														<?php error_message('year_date', $error['year_date']) ?>
													</div>
												</div>
												
												
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												
												<div class="form-group <?php has_error($error['semester_th']) ?>">
													<label class="" for="semester_th">Semester No</label>
													<div class="col-md-8 col-xs-12 input-group">
														<select name="semester_th" id="semester_th" class="selectpicker form-control">
															<option value="">Select</option>
															<option value="1 st">1st</option>
															<option value="2 nd">2nd</option>
															<option value="3 rd">3rd</option>
															<option value="4 th">4th</option>
															<option value="5 th">5th</option>
															<option value="6 th">6th</option>
															<option value="7 th">7th</option>
															<option value="8 th">8th</option>
															<option value="9 th">9th</option>
															<option value="10 th">10th</option>
															<option value="11 th">11th</option>
															<option value="12 th">12th</option>
														</select>
														<?php error_message('semester_th', $error['semester_th']) ?>
													</div>
												</div>
												
												
												
												
												
											</fieldset>
										</div>
									</div>
								</div>
								
								
								
								<div class="well col-sm-10 col-md-10">
									<legend>Course Details</legend>
									<table class="table table-responsive table-bordered">
										<thead>
											<tr>
												<th>No.</th>
												<th>Course Code</th>
												<th>Course Title</th>
												<th>Credit</th>
												
											</tr>
										</thead>
										<tbody id="education_fields">
											<tr>
												<td>1.</td>
												<td><input id="course_no" name="course_no[]" class="form-control" type="text" required></td>
												<td><input id="course_title" name="course_title[]" class="form-control" type="text" required></td>
												<td><input id="course_credit" name="course_credit[]" class="form-control" type="text" required></td>
												
											</tr>
										</tbody>
										
										
										
										
										<tfoot>
											<tr>
												<td colspan="5"><button class="btn btn-success" type="button"  onclick="education_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Course</button></span>
											</tr>
										</tfoot>
									</table>
								</div>
								
								<p class="text-center ">
									<button class="btn btn-success" name="submit" role="button">Submit</button>
								</p>

						   
						   </form>
						</div>
					</div>
                </div>
            </div>
			</div>
            </div>
			</div>
			
		
			
			
            </div>
			</div>
            </section>
