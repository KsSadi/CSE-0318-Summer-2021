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
                 <section class="course_details_area section_gap"  style="background-color: #eee;">
<div class="container">
<div class="row">
<div class="col-lg-10 course_details_left"  style="background-color: white;">

<div class="content_wrapper">
<h4 class="title">Pre Registration  List</h4>
<div class="content">  




            <div class="panel panel-default full-height">
			<?php 
			$info = get_user_info(array(), current_user());
			?>
				<div class="panel-body">
				
					<div class="table-responsive">
					<table class="table table-border" id="applications">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Semester</th>
								<th>Student ID</th>
								<th>Date</th>
								<th>Edit</th>
								<th>Download</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $x = 1; while($result = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?php echo $x ?></td>
								<td><?php echo $result['semester_month'] ?></td>
								<td><?php echo $result['admission_roll']; ?></td>
								<td><?php echo date('d-m-Y', $result['date']) ?></td>
								<td>
									<?php echo '<a href="'.APP_URL.'edit-honours-application-form/'.$result['id'].'/" title="Edit this applocation form" target="_blank">Edit</a>';?>
								</td>
								<td>
									<?php echo '<a href="'.APP_URL.'download-honours-application-form/'.$result['id'].'/" title="Dowload this applocation form" target="_blank">Download</a>';?>
								</td>
								<td>
									<?php if($result['status']==  1) echo '<span class="badge badge-success badge-pill">Approved</span>';?>
									<?php if($result['status']==  0) echo '<span class="badge badge-info badge-pill">Pending</span>';?>
									<?php if($result['status']== -1) echo '<span class="badge badge-danger badge-pill">Disapproved</span>';?>
								</td>
							</tr>
							<?php $x++; endwhile; ?>
						</tbody>
					</table>
					
					</div>
				</div>
            </div>
        </div>
            </div>
			</div>
			
			
			
			
			
            </div>
			</div>
            </section>