
			<?php if(is_logged_in()): 
			$info = get_user_info(array(), current_user());
			
			$admission_roll =  current_user();
				$user_info = get_user_info(array('name_en', 'picture'), $admission_roll);
				
				$sql = "SELECT id FROM private_notice WHERE admission_roll='$admission_roll' AND is_read='0'";
				$query = mysqli_query($conn, $sql);
				$unread_count = mysqli_num_rows($query);
			
			
			?>
			
		
<!DOCTYPE html>
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
		<link href="<?php echo APP_URL ?>assets/css/loader.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>bootstrap/css/bootstrap.min.css">
		<link href="<?php echo APP_URL ?>plugins/sliders/owlCarousel/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo APP_URL ?>plugins/sliders/owlCarousel/css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>plugins/flaticon/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>assets/css/pages/landing-page/style.css">
		<link href="<?php echo APP_URL ?>assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo APP_URL ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo APP_URL ?>assets/css/components/portlets/portlet.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo APP_URL ?>assets/css/apps/mailbox.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo APP_URL ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>plugins/dropify/dropify.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>plugins/table/datatable/datatables.css">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>plugins/table/datatable/custom_dt_html5.css">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>assets/css/apps/mailbox-read.css">
		<link href="<?php echo APP_URL ?>assets/css/components/custom-countdown.css" rel="stylesheet" type="text/css">

	
		
	</head>
	
	
	
		
		<!-- Nabber For Logged Use -->	
			
			
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

       

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                
                <div class="container">
                    <div class="row layout-spacing">

                        <!-- Profile Header -->
                        <div class="col-sm-12">
                            <div id="profile-header" class="" style="background: #fff url(assets/img/header.jpeg) no-repeat center center;background-size: cover;">
                                <div class="row">
                                    <div class=" profile-section col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media ml-sm-5 ml-1">
                                                    <img class="mr-sm-3 mr-2 usr-img" src="<?php echo APP_URL.$info['picture']; ?>" alt="usr-img">
                                                    <div class="media-body">
                                                        <h5 class="usr-name"><?php echo $info['name_en']; ?></h5>
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
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#" role="tab" aria-selected="true"><i class="flaticon-user-fill"></i> Profile</a>
                                            </li>
                                            
                                           
                                            <li class="nav-item">
                                                <a class="nav-link" id="" data-toggle="" href="<?php echo APP_URL ?>update-profile" role="tab" aria-selected="false"><i class="flaticon-settings-7"></i> Edit Profile</a>
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

                                                


                                                <div class="col-sm-12">

                                                   

                                                    <div class="card post image-post mb-4" style="">
                                                        <div class="card-body">
                                                            

															<div class="layout-spacing ddf" id="cancel-row">
																<div class="widget portlet-widget">
																	<div class="widget-content widget-content-area">
																		<div class="portlet portlet-functional">
																			<div class="portlet-title portlet-functional  d-sm-flex d-block justify-content-between">
																				<div class="caption  align-self-center mb-sm-0 mb-3 d-inline">
																					<span class="caption-subject text-uppercase white"> About</span>
																				</div>
																			   
																			</div>
																			<div class="portlet-body portlet-common-body panel-collapse">
																			   
																			   
																		<div class="list-group badge-list-group mb-4">
																		   
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Gender  <span class=" badge badge-pill badge-dark"><?php echo $info['gender']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Date Of Birth <span class=" badge badge-pill badge-success"><?php echo date('d-m-Y', $info['birthdate']); ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Religion <span class=" badge badge-pill badge-warning"><?php echo $info['religion']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Nationality <span class=" badge badge-pill badge-info"><?php echo $info['nationality']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Blood Group <span class=" badge badge-pill badge-danger"><?php echo $info['blood']; ?></span></a>
																			
																		</div>
																			
																			
																			
																			</div>
																		</div>
																	</div>
																</div>
															</div>

                     
                                                        </div>
                                                    </div>


                                                    <div class="card post image-post mb-4" style="">
                                                        <div class="card-body">
                                                            

															<div class="layout-spacing ddf" id="cancel-row">
																<div class="widget portlet-widget">
																	<div class="widget-content widget-content-area">
																		<div class="portlet portlet-functional">
																			<div class="portlet-title portlet-functional  d-sm-flex d-block justify-content-between">
																				<div class="caption  align-self-center mb-sm-0 mb-3 d-inline">
																					<span class="caption-subject text-uppercase white"> Information</span>
																				</div>
																			   
																			</div>
																			<div class="portlet-body portlet-common-body panel-collapse">
																			   
																			   
																		<div class="list-group badge-list-group mb-4">
																		   
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Father's Name  <span class=" badge badge-pill badge-success"><?php echo $info['name_f']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Father's Occuption	<span class=" badge badge-pill badge-success"><?php echo $info['occuption_f']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Mother's Name <span class=" badge badge-pill badge-info"><?php echo $info['name_m']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Mother's Occuption <span class=" badge badge-pill badge-info"><?php echo $info['occuption_m']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Guardian's Name <span class=" badge badge-pill badge-danger"><?php echo $info['name_g']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Relationship With Guardian's<span class=" badge badge-pill badge-danger"><?php echo $info['relation_g']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Guardian's Mobile	<span class=" badge badge-pill badge-danger"><?php echo $info['mobile_g']; ?></span></a>
																			
																		</div>
																			
																			
																			
																			</div>
																		</div>
																	</div>
																</div>
															</div>

                     
                                                        </div>
                                                    </div>
													
													
													
													
                                                    <div class="card post image-post mb-4" style="">
                                                        <div class="card-body">
                                                            

															<div class="layout-spacing ddf" id="cancel-row">
																<div class="widget portlet-widget">
																	<div class="widget-content widget-content-area">
																		<div class="portlet portlet-functional">
																			<div class="portlet-title portlet-functional  d-sm-flex d-block justify-content-between">
																				<div class="caption  align-self-center mb-sm-0 mb-3 d-inline">
																					<span class="caption-subject text-uppercase white"> Present Address</span>
																				</div>
																			   
																			</div>
																			<div class="portlet-body portlet-common-body panel-collapse">
																			   
																			   
																		<div class="list-group badge-list-group mb-4">
																		   
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">House  <span class=" badge badge-pill badge-dark"><?php echo $info['present_house']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Road <span class=" badge badge-pill badge-success"><?php echo $info['present_road']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Area <span class=" badge badge-pill badge-warning"><?php echo $info['present_area']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">City <span class=" badge badge-pill badge-info"><?php echo $info['present_city']; ?></span></a>
																			
																		</div>
																			
																			
																			
																			</div>
																		</div>
																	</div>
																</div>
															</div>

                     
                                                        </div>
                                                    </div>
													
													
													 <div class="card post image-post mb-4" style="">
                                                        <div class="card-body">
                                                            

															<div class="layout-spacing ddf" id="cancel-row">
																<div class="widget portlet-widget">
																	<div class="widget-content widget-content-area">
																		<div class="portlet portlet-functional">
																			<div class="portlet-title portlet-functional  d-sm-flex d-block justify-content-between">
																				<div class="caption  align-self-center mb-sm-0 mb-3 d-inline">
																					<span class="caption-subject text-uppercase white"> Permanent Address</span>
																				</div>
																			   
																			</div>
																			<div class="portlet-body portlet-common-body panel-collapse">
																			   
																			   
																		<div class="list-group badge-list-group mb-4">
																		   
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Village  <span class=" badge badge-pill badge-dark"><?php echo $info['address_village']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Post Office	 <span class=" badge badge-pill badge-success"><?php echo $info['address_postoffice']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">Upazilla <span class=" badge badge-pill badge-warning"><?php echo $info['address_upazilla']; ?></span></a>
																			<a href="javascript:void(0);" class="list-group-item d-flex justify-content-between align-items-center">District <span class=" badge badge-pill badge-info"><?php echo $info['address_district']; ?></span></a>
																				
																		</div>
																			
																			
																			
																			</div>
																		</div>
																	</div>
																</div>
															</div>

                     
                                                        </div>
                                                    </div>



                                                   <!--End-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--Right Side Content-->

					<?php include('parts/rightside.php');
					?>
<!--End Right Side Content-->                           

						   </div>
                        </div>
						

                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    		</html>	
		
				
			<?php else: ?>
			<!doctype html>

			<!--Non Logged User-->
			<html lang="en">
<head>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<title>
			<?php echo $title ?>
		</title>
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
	
			
			
			
			<!-- Nabber For Logged Use -->	
	<!-- Header -->
	<section class="home_banner_area">
				<div class="banner_inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<div class="banner_content">
								<h2> SUB - Students Portal</h2>
								<p>

								Through this portal, SUB students will be able to fill Pre-Registration form-fillup and Add or Drop A Subject.

								</p>

									<div class="search_course_wrap">

									<a href="login/" class="primary-btn text-uppercase"><i class="fas fa-sign-in-alt"></i>  Login</a> <a href="<?php echo APP_URL ?>registration/" class="primary-btn text-uppercase"><i class="fas fa-user-plus"></i>  Registration</a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
						
			<section class="feature_area">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-lg-4">
							<div class="single_feature d-flex flex-row pb-30">
								<div class="icon">
								<span class="fas fa-graduation-cap"></span>

								</div>
								<div class="desc">
								<h4>SUB Students Portal</h4>
								<p>
								Welcome to the State University of Bangladeh Student Portal.SUB Student Portal provides a single point of access to online university services and information for students. 
								</p>
								</div>
							</div>
							
						
	<div class="single_feature d-flex flex-row pb-30">
								<div class="icon">
								<span class="fas fa-school"></span>
							
								</div>
								<div class="desc">
								<h4>All in One Place</h4>
								<p>
								Using SUB Students portal you can do many things like students information update,pre registration,Exam Notice , Class routine etc.
								</p>
								</div>
							</div>
							

						</div>
					</div>
				</div>
			</section>
			
			<div class="department_area section_gap">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="dpmt_courses">
<div class="row">

<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
<div class="single_department">
<div class="dpmt_icon">
<img src="img/dpmt/icon1.png" alt="">
</div>
<h4>Calculator</h4>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
<div class="single_department">
<div class="dpmt_icon">
<img src="img/dpmt/icon2.png" alt="">
</div>
<h4>Course</h4>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
<div class="single_department">
<div class="dpmt_icon">
<img src="img/dpmt/icon3.png" alt="">
</div>
<h4>Routine</h4>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
<div class="single_department">
<div class="dpmt_icon">
<img src="img/dpmt/icon4.png" alt="">
</div>
<h4>Add/Drop</h4>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
<div class="single_department">
<div class="dpmt_icon">
<img src="img/dpmt/icon5.png" alt="">
</div>
<h4>Portal</h4>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
<div class="single_department">
<div class="dpmt_icon">
<img src="img/dpmt/icon6.png" alt="">
</div>
<h4>Result</h4>
</div>
</div>

<div class="offset-lg-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
<div class="single_department">
<div class="dpmt_icon">
<img src="img/dpmt/icon7.png" alt="">
</div>
<h4>Notice</h4>
</div>
</div>
</div>
</div>
</div>
<div class="offset-lg-1 col-lg-5">
<div class="dpmt_right">
<h1>SUB Student Portal</h1>
<p>

<p><b>Q1: How To Registration in SUB Portal?</b></p>

<p>Answer : Click on Registration Button and Fill up a from.</p>
    
   
<p><b>Q2: How to Login?</b></p>

<p>Answer : Use Your Student Id (Provided by State University of Bangladesh ) and Password.</p>

<p><b>Q3: How to fill up Pre Registration From?</b></p>

<p>Answer : Click on "From Fill-Up" from Menu ber. And then click "Pre Registration" from dropdown option.Now Just fill up the form . Its so easy.   </p> 
    
    </p>
<a href=<?php echo APP_URL ?>registration/" class="primary-btn text-uppercase">Register Now</a>
</div>
</div>
</div>
</div>
</div>
				
						
				
		<div class="section_gap registration_area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-7">
						<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
						<h1>Register Now</h1>
						<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s
						exciting to think about setting up your own viewing station.</p>
						</div>
						<div class="col clockinner1 clockinner">
						<h1 class="days">150</h1>
						<span class="smalltext">Days</span>
						</div>
						<div class="col clockinner clockinner1">
						<h1 class="hours">23</h1>
						<span class="smalltext">Hours</span>
						</div>
						<div class="col clockinner clockinner1">
						<h1 class="minutes">47</h1>
						<span class="smalltext">Mins</span>
						</div>
						<div class="col clockinner clockinner1">
						<h1 class="seconds">59</h1>
						<span class="smalltext">Secs</span>
						</div>
						</div>
					</div>
					<div class="col-lg-4 offset-lg-1">

					</div>
				</div>
			</div>
		</div>		
						
						
			<style>
.footers{
    background-color: #000000;
    color: #000;
    padding-top: 20px;
    padding-bottom: 15px;
	text-align:center;
}
</style>
<footer class="footers">
<div class="container">


</div>
</footer>
</html>
	
				
		<!-- /Header -->


	
				
				
				
			<?php endif; ?>
            </div>
        </div>