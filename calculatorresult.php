 <?php
require_once('includes/config.php');
require_once('includes/functions.php');

?>                  


<?php
$weaver=$_POST["weaver"];
$credit=$_POST["credit"];
$creditfee=3400;
$totalcreditfee=$creditfee*$credit;
$regis=5000;
$totalw=($totalcreditfee*$weaver)/100;
$total=$totalcreditfee-$totalw;
$ftotal=$regis+$total;
$first=$total/3;






?>



<!doctype html>
<html>
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
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>registration/">Registration</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>login/">Login</a></li>
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>notices/">Notice</a></li>

</ul>
<?php else : ?>

<ul class="nav navbar-nav menu_nav ml-auto">
<li class="nav-item"><a class="nav-link" href="<?php echo APP_URL ?>">About</a></li>
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
<h4 class="title">Semester Fee Calculation</h4>
<div class="content">  


            <div class="panel panel-default full-height">
                <div class="panel-body">
					
           
                    <div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="well">
									<fieldset>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="credit">Your Credit : <span class="badge badge-danger badge-pill"><?php echo $credit;?></span></label>
											
										</div>
										<hr>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="weaver">Your Weaver : <span class="badge badge-info badge-pill"><?php echo $weaver;?> %</span></label>
											
										</div>
										<hr>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="weaver"> Weaver Amount : <span class="badge badge-warning badge-pill"><?php echo $totalw;?> /-</span></label>
											
										</div>
										<hr>
										<div class="form-group">
											<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="weaver">Payable Semester Fee : <span class="badge badge-success badge-pill"><?php echo $ftotal;?> /-</span></label>
											
										</div>
										<hr>
										
										
									</fieldset>
								</div>
							
						</div>
					</div>
                </div>
            </div>
			
<h4 class="title">Installment Details</h4>
			<div class="well col-sm-10 col-md-10">
								
									<table class="table table-responsive table-bordered">
										<thead>
											<tr>
												<th style="width:560px;">Installment No.</th>
												<th style="width:560px;">Minimum Payable Amount</th>
												
												
											</tr>
										</thead>
										<tbody id="">
											<tr>
												<td>Registration Fee</td>
												<td>5000/-</td>
											
												
											</tr>
											<tr>
												<td><span class="badge badge-info badge-pill">1st</span> Installment</td>
												<td><?php echo $first;?> /-</td>
											
												
											</tr>
											<tr>
												<td><span class="badge badge-info badge-pill">2nd</span> Installment</td>
												<td><?php echo $first;?> /-</td>
											
												
											</tr>
											<tr>
												<td><span class="badge badge-info badge-pill">3rd</span> Installment</td>
												<td><?php echo $first;?> /-</td>
											
												
											</tr>
										</tbody>
										
										
									</table>
									<p class="text-center ">
									<button class="btn btn-success"><i class="fas fa-calculator"></i><a href="calculator.php" style="color:white;"> Calculate Again</a></button>
								</p>
			</div>
			
			
         </div>
            </div>
			</div>
		
			
            </div>
			</div>
            </section>
				
			