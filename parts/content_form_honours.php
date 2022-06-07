<!DOCTYPE html>
<html>
	<head>
		<title>Honours Exam Application form</title>
		<link href="<?php echo APP_URL ?>assets/fonts/font.css" rel="stylesheet">
		<style>
		
		@media print {
		  #printPageButton {
			display: none;
		  }
		}
		p{margin-top:5px;margin-bottom:5px;}
		</style>	
	</head>
	<body style="font-family: 'SolaimanLipi'">
		<button id="printPageButton" onClick="window.print();">Print</button>
		<div class="header" style="text-align:center">
		
			<div class="logo"style="margin-bottom:5px;">
				<img src="<?php echo APP_URL.'assets/img/logo.png' ?>" height="60">
			</div>
			<div class="u_address" style="font-size:14px">77 Satmasjid Road ,Dhanmondi. Dhaka-1205</div>
			
			<div class="u_address" style="font-size:14px"> Phone: 58151782-5 </div>
			
			<div class="u_address" style="font-size:14px"><b><u>www.sub.edu.bd</u></b></div>
			</br>
			<div class="u_name" style="font-size:22px;"> Pre-Registration Form</div>

			<hr>
			</br>
		</div>
		
		
		
		<div class="line">
			<p>
				<span>Student ID : <b> <?php echo $si['admission_roll'] ?></b></span>
				
			</p>
		</div>
		<div class="line">
			<p>
				<span>Name Of Student :  <b><?php echo strtoupper($si['name_en']) ?></b></span>
				
			</p>
		</div>
		<div class="line">
			<p>
				<span>Name of Guardian :  <b><?php echo $si['name_g'] ?></b></span>
				
			</p>
		</div>
		
		<div class="line">
			<p>
				<span>Mailing Address : House: <b><?php echo $si['present_house'] ?></b> , Road: <b><?php echo $si['present_road'] ?></b>, Area: <b><?php echo $si['present_area'] ?></b>,  City: <b><?php echo $si['present_city'] ?> </span>
				
			</p>
		</div>
		
		<div class="line">
			<p>
				<span>Permanent Address :Village: <b><?php echo $si['address_village'] ?></b></span>
				<span style="margin-left:60px">Post :  <b><?php echo $si['address_postoffice'] ?></b></span>
				
			</p>
			<p>
				<span style="margin-left:150px">Upazila: <b><?php echo $si['address_upazilla'] ?></b></span>
				<span style="margin-left:60px">Dist :  <b><?php echo $si['address_district'] ?></b></span>
				
			</p>
			
		</div>
		
		<div class="line">
			<p>
				<span>Contact No : Mobile : <b><?php echo $si['mobile_no'] ?></b></span>
				<span style="margin-left:60px">E-mail :  <span><b><?php echo $si['mail'] ?></b></span>
				
			</p>
			
			
		</div>
		
		<div class="line">
			<p>
				<span>Relationship with the Guardian : <b><?php echo $si['relation_g'] ?></b></span>
				
			</p>
		</div>
		<div class="line">
			<p>
				<span>Name of Department : <b><?php echo $si['dept_s'] ?></b></span>
				<span style="margin-left:70px">Program :  <span><b> BSc in <?php echo $si['dept_s'] ?> </b></span>
				
			</p>
		</div>
		<div class="line">
			<p>
				<span>Semester :  <b><?php echo $ai['semester_month'] ?></b></span>
				<span style="margin-left:70px">Semester No :  <b><?php echo $ai['semester_th'] ?></b></span>
				<span style="margin-left:70px">Year :  <b><?php echo $ai['year_date'] ?></b></span>
				
			</p>
		</div>
		</br>
		<div class="line">
			<p>
				<span>Course' to be taken :</span>
				
			</p>
		</div>
		
		
		
		
		
		
		
		
		
		
		
	
	<!--For Adding BoostrapStart-->	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <!-- End-->
  
  
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Course Code</th>
        <th>Course Title</th>
        <th>Credit</th>
      </tr>
    </thead>
	
    <tbody>
    	<?php $courses = !empty($courses) ? $courses: [] ?>
	<?php foreach($courses as $course): ?>
      <tr>
        <td><b><?php echo $course[0] ?></b></td>
        <td><?php echo $course[1] ?></td>
        <td><?php echo $course[2] ?></td>
      </tr>
	  <?php endforeach; ?>
    </tbody>
   </table>
		
		
	
		
		
		<div style="margin-top:20px" class="line">
			
			<p>.........................</p>
			<p>Signature with date </p>
			
			
				</div>
				
				
	
		
	</body>
</html>