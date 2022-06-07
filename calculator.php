 <?php
require_once('includes/config.php');
require_once('includes/functions.php');

?> 
  <!doctype html>

			<!--Non Logged User-->
			<html lang="en">
<head>
		<title>
			Semester Fees Calculation | SUB Student Portal
		</title>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<link media="all" type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/css/style.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/css/bootstrap.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/vendors/linericonstyle.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/css/font-awesome.min.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/vendors/owl-carousel/owl.carousel.min.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/vendors/lightbox/simpleLightbox.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/vendors/nice-select/css/nice-select.css">
		<link media="all" type="text/css" rel="stylesheet" href="csss/vendors/animate-css/animate.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>	
			
			
		


<header class="header_area">

<div class="main_menu">

<nav class="navbar navbar-expand-lg navbar-light">
<div class="container">

<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
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
<li class="nav-item"><a class="nav-link" STYLE="margin-left" href="<?php echo APP_URL ?>notices/">Notices</a></li>
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
<h4 class="title">Semester Fee Calculation</h4>
<div class="content">  


            <div class="panel panel-default full-height">
                <div class="panel-body">
					
           
                    <div class="row">
						<div class="col-sm-12 col-md-12">
							<form class="form-horizontal" method="POST" action="calculatorresult.php" autocomplete="off">
								<div class="well">
									<fieldset>
										
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="credit">Total Credit</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="credit" name="credit" class="form-control" value="" type="text" required>
												
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="weaver">Total Weaver (%)</label>
											<div class="col-md-8 col-sm-6 col-xs-12 input-group">
												<input id="weaver" name="weaver" class="form-control" value="" type="number" required>
												
											</div>
										</div>
										
										
										
									</fieldset>
									</div>
								
								<p class="text-center ">
									<button class="btn btn-success" name="submit" role="button"><i class="fas fa-calculator"></i> Calculate</button>
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
				
			<?php


include('parts/footer.php');
?>