 <html>
  <head>
  <meta charset="utf-8">
  <title>Login || SUB Students Portal</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
 <link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>bootstrap/css/bootstrap.min.css">

		<section>            
            <div class="container pt-3">
                <div class="row justify-content-sm-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6">

                        <div class="card border-info text-center">
						
						<?php if(isset($message)) echo $message; ?>
						
                            <div class="card-header">
                                Login to SUB Students Portal
                            </div>
                            <div class="card-body">
                                <img src="<?php echo APP_URL ?>assets/img/logo.png" class="img-fluid" >
                                <h4 class="text-center">&nbsp;</h4>
                               

							   <form action="" class="form-signin" method="post">
                                    <input type="text" class="form-control mb-2" name="admission_roll" placeholder="UserId(Ex:UG02-27-11-022)" value="<?php retrieve_value('admission_roll'); ?>" required autofocus><br>
                                    <input type="password" class="form-control mb-2" name="password" placeholder="Password" required> <br>
                                   
									<button class="btn btn-lg btn-primary btn-block mb-1" name="submit" type="submit">Login</button>
                                   
                                    <label class="checkbox float-left">
                                        <input type="checkbox" value="remember_me">
                                        Remember me
                                    </label>
                                    <a href="<?php echo APP_URL ?>" class="pull-right" class="float-right">Back to Home</a>
									
									
                     <a href="<?php echo APP_URL ?>registration/" class="float-right">Create an account </a>
                                </form>
								
								
								
								
                            </div>
                            <div class="card-footer">  
							<div style="width:100%;height:auto; background:#f3e9e9";padding:2px>
								  COPYRIGHT © 2021, SUB Student Portal
								 </div>
							</div>
						</div>
                        
                    </div>
                </div>
            </div>
        </section>
		
		     <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->  

        
    <script src="<?php echo APP_URL ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo APP_URL ?>bootstrap/js/bootstrap.min.js"></script>

        <!-- Template Main Javascript File -->
        <script src="js/main.js"></script>
    </body>    
</html>

