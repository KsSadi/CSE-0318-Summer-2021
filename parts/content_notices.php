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
	
                
	
	<!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

       
	   	   
        <!--  BEGIN CONTENT PART  -->
		<section class="course_details_area section_gap"  style="background-color: #eee;">
        <div id="content" class="main-content">
          
                
            <div class="container">    
                <div class="row" id="cancel-row">
                <div class="col-lg-12 course_details_left"  style="background-color: white;">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <h4 class="title">Public Notice</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="datatable" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                
												<th>SL No.</th>
												<th>Title</th>
												<th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php $x=1;
										$sql = "SELECT id, title, date FROM public_notice ORDER BY date DESC";
										$query = mysqli_query($conn, $sql);
										while($result = mysqli_fetch_assoc($query)) : ?>
						
                                            <tr>
												
												
												<td><?php  echo $x?></td>
												<td>
													<a href="<?php echo APP_URL.'notice/'.$result['id'] ?>">
														<?php echo $result['title'] ?>
													</a>
												</td>
												<td><?php echo date('d-m-Y', $result['date']) ?></td>
																	
                                                
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
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
	 <script>
        $('#datatable').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'csv', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'print', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                ]
            },
            "language": {
                "paginate": {
                  "previous": "<i class='flaticon-arrow-left-1'></i>",
                  "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );
    </script>
	  </section> 
    <script src="<?php echo APP_URL ?>assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="<?php echo APP_URL ?>plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="<?php echo APP_URL ?>plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="<?php echo APP_URL ?>plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="<?php echo APP_URL ?>plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="<?php echo APP_URL ?>plugins/table/datatable/button-ext/buttons.print.min.js"></script>
	<!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="<?php echo APP_URL ?>plugins/dropify/dropify.min.js"></script>
    <script src="<?php echo APP_URL ?>plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>  