
      <footer class="main-footer">
        <div class="text-center"><?php echo $app['footer_text']?></div>
      </footer>

    </div>

    
    <!-- script src="<?php echo $admin_url ?>assets/js/bootstrap.min.js" type="text/javascript"></script -->
    <script src="<?php echo $admin_url ?>assets/js/app.min.js" type="text/javascript"></script>
	<script src="<?php echo $admin_url ?>assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
	<script src="<?php echo $admin_url ?>assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="//cdn.ckeditor.com/4.4.3/standard/ckeditor.js" type="text/javascript"></script>
	
	<script>
	
	
		/*
		 * DataTables
		 */
		 
		$(document).ready( function () {
			$('#students').dataTable(
			
			<?php if(isset($_GET['q'])) echo '{"oSearch":{"sSearch": "'.$_GET['q'].'"}}' ?>

			);
		});
		
		$(document).ready( function () {
			$('#datatable').dataTable();
		});
		
		$(document).ready( function () {
			$('#searchable').dataTable(
			
			<?php if(isset($_GET['q'])) echo '{"oSearch":{"sSearch": "'.$_GET['q'].'"}}' ?>

			);
		});
		/*
		 * CKEDITOR
		 */
		
		<?php if($file == 'add_public_notice.php' || $file == 'add_private_notice.php' ) echo "CKEDITOR.replace( 'message' );"; ?>
		
		/*
		 * Dynamic upload field
		 */
		 
		var room = 1;
		function file_fields() {
		 
			room++;
			var objTo = document.getElementById('file_input')
			var divtest = document.createElement("div");
			var rdiv = 'removeclass'+room;
			divtest.innerHTML = '<input type="file" name="file_'+room+'" accept=".pdf,.jpg,.doc,.png">';

			objTo.appendChild(divtest)
		}
		function courses_field() {
				 
			room++;
			var objTo = document.getElementById('courses_field');
			var divtest = document.createElement("tr");
			var rdiv = 'removeclass'+room;
			divtest.innerHTML = '<tr><td>'+room+'.</td><td><input id="course_semester" name="course_semester[]" class="form-control" type="text"></td><td><input id="course_no" name="course_no[]" class="form-control" type="text"></td><td><input id="course_title" name="course_title[]" class="form-control" type="text"></td><td><input id="course_gpa" name="course_gpa[]" class="form-control" type="text"></td></tr>';
			
			objTo.appendChild(divtest)
		}
		function remove_education_fields(rid) {
			$('.removeclass'+rid).remove();
		}

		/*
		 * Modal
		 */
		$('#my-modal').modal({
		  show:true,
		  closeOnEscape: true
		});

		/*
		 * Ajax
		 */
		$(function(){
			$('#myForm').on('submit', function(e){ // honours
			  e.preventDefault();
			  $.post('<?php echo $admin_url; ?>honours_application_disapprove.php', 
				 $('#myForm').serialize(), 
				 function(data, status, xhr){
					$('#disapprove').modal('hide');
					if(data == 'success'){
						var mymodal = $('#success');
						mymodal.find('.modal-body').text('The application was disapproved and a private notice was made to the student.');
						mymodal.modal('show');
					}
					else{
						var mymodal = $('#failed');
						mymodal.find('.modal-body').text('There was a problem disapproving the application. Make sure you provided a reason.');
						mymodal.modal('show');
					}
				 });
			});
		});
		
		$(function(){
			$('#deleteForm').on('submit', function(e){ // honours
			  e.preventDefault();
			  $.post('<?php echo $admin_url; ?>delete_application.php', 
				 $('#deleteForm').serialize(), 
				 function(data, status, xhr){
					$('#deleteModal').modal('hide');
					if(data == 'success'){
						$('.box').hide();
						$('#successCallout').show();
						
						/*var mymodal = $('#success');
						mymodal.find('.modal-body').text('The application was deleted.');
						mymodal.modal('show');*/
					}
					else{
						//$('#failedCallout').text(data);
						$('#failedCallout').show();
						/*var mymodal = $('#failed');
						mymodal.find('.modal-body').text(data);//'The application could not be deleted. Try again.');
						mymodal.modal('show');*/
					}
				 });
			});
		});
		
		$(function(){
			$('#myForm2').on('submit', function(e){ // masters
			  e.preventDefault();
			  $.post('<?php echo $admin_url; ?>masters_application_disapprove.php', 
				 $('#myForm2').serialize(), 
				 function(data, status, xhr){
					$('#disapprove').modal('hide');
					if(data == 'success'){
						$('#successDisapproved').modal('show');
					}
					else{
						$('#failedDisapproved').modal('show');
					}
				 });
			});
		});
		
		$(function(){
			$('#disapproveImprovement').on('submit', function(e){ // honours
			  e.preventDefault();
			  $.post('<?php echo $admin_url; ?>improvement_application_disapprove.php', 
				 $('#disapproveImprovement').serialize(), 
				 function(data, status, xhr){
					$('#disapprove').modal('hide');
					if(data == 'success'){
						var mymodal = $('#success');
						mymodal.find('.modal-body').text('The application was disapproved and a private notice was made to the student.');
						mymodal.modal('show');
					}
					else{
						var mymodal = $('#failed');
						mymodal.find('.modal-body').text('There was a problem disapproving the application. Make sure you provided a reason.');
						mymodal.modal('show');
					}
				 });
			});
		});
		
		$(function(){
			$('#deleteImprovement').on('submit', function(e){ // honours
			  e.preventDefault();
			  $.post('<?php echo $admin_url; ?>delete_improvement.php', 
				 $('#deleteImprovement').serialize(), 
				 function(data, status, xhr){
					$('#deleteModal').modal('hide');
					if(data == 'success'){
						$('.box').hide();
						$('#successCallout').show();
						
						/*var mymodal = $('#success');
						mymodal.find('.modal-body').text('The application was deleted.');
						mymodal.modal('show');*/
					}
					else{
						//$('#failedCallout').text(data);
						$('#failedCallout').show();
						/*var mymodal = $('#failed');
						mymodal.find('.modal-body').text(data);//'The application could not be deleted. Try again.');
						mymodal.modal('show');*/
					}
				 });
			});
		});
		
		
		/* 
		 * Improvement Form
		 */
		
		$("#admission_roll").keyup(function (){
			var data = $('#admission_roll').serialize();
			
			$.ajax({
			type:'post',
			data:data,
			url:'<?php echo $admin_url ?>ajax.php?improvement_form',
			success:function(response){
				if(response != "failed"){
					var json = $.parseJSON(response);
					$("#name_en").val(json[0].name_en);
					$("#name_bn").val(json[0].name_bn);
					$("#name_m").val(json[0].name_m);
					$("#name_f").val(json[0].name_f);
					$("#mobile").val(json[0].mobile_no);
					$("#session").val(json[0].session);
					$("#reg_no").val(json[0].reg_no);
					//alert(json[0].name_en);
				}
			},
			error:function(){
				//alert("Ajax request error.");
			}
		  });
		});
	</script>
  </body>
</html>