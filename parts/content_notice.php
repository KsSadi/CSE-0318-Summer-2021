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

    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <!-- Tab Mobile View Header -->
    
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    
    <!--  END NAVBAR  -->
    <section class="course_details_area section_gap"  style="background-color: #eee;">
  
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

      
        
        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
		
          
               
                
              <div class="container">    
                <div class="row" id="cancel-row">
                    <div class="col-lg-12 course_details_left"  style="background-color: white;">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="inbox-section">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                </div>

                                <div class="col-md-12 messages-timeline">

                                    <div class="messages mt-5 mb-5">
									<?php if($ok) : ?>
                                        <div class="media">
                                            <img class="mr-3 usr-img rounded-circle" style="height:60px;"src="<?php echo APP_URL ?>assets/img/download.png">
                                            <div class="media-body">
												
                                                <h5 class="mt-0">SUB Admin</h5>
                                                <p class="messages-meta-date"><?php echo date('d-m-Y', $result['date']) ?></p>
                                         
                                            </div>
                                        </div>
                                        <div class="mt-4 message-body">
                                          <hr>
                                            <?php echo htmlspecialchars_decode($result['message']); ?>
					
											<?php 
											$files_arr = json_decode($result['files']);
											if(!empty($files_arr)) : ?>
											
											  <h4 class="title"></h4>
											<p class="mt-5 mb-5 strong">
											<strong>
											<i>Attached files:</i>
											</strong></p>
					<ul>
					<?php foreach($files_arr as $files_indi):?>
						<li>
							<a href="<?php echo APP_URL.$files_indi ?>"><?php echo substr($files_indi, 15); ?></a>
						</li>
					<?php endforeach; ?>
					</ul>
					<?php endif; ?>

                                        
                                            <p class="mt-5 mb-5 strong title"><strong>Best Regards,</strong></p>
                                        </div>
                                    </div>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--End-->
					</div>
					</div>
               


            </div>
       
		</section>
    </div>
    <!--  END CONTENT PART  -->