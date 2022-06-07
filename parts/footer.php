 <!--  BEGIN FOOTER  ->
    <footer class="footer-section theme-footer">

        

        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    <ul class="list-inline links ml-sm-5">
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Home</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">Blog</a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="javascript:void(0);">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="javascript:void(0);">Buy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="https://designreset.com/equation">Equation Admin Theme</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->
			<style>
.footers{
    background-color: #000000;
    color: white;
    padding-top: 10px;
    padding-bottom: 10px;
	text-align:center;
}
</style>


		<footer class="footers text-center col-sm-12">
			<b><?php echo $app['footer_text'] ?></b>
		</footer>
	


		

		
	<script src="<?php echo APP_URL ?>assets/js/libs/jquery-3.1.1.min.js"></script>
	<script src="<?php echo APP_URL ?>assets/js/loader.js"></script>
	<script src="<?php echo APP_URL ?>bootstrap/js/popper.min.js"></script>
	<script src="<?php echo APP_URL ?>plugins/sliders/owlCarousel/js/owl.carousel.min.js"></script>
	<script src="<?php echo APP_URL ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo APP_URL ?>assets/js/pages/landing-page/script.js"></script>
	<script src="<?php echo APP_URL ?>assets/js/users/calendar.js"></script>
    <script src="<?php echo APP_URL ?>assets/js/users/custom-profile.js"></script>	
	<script src="<?php echo APP_URL ?>assets/js/apps/custom-mailbox.js"></script>
	<script src="<?php echo APP_URL ?>plugins/dropify/dropify.min.js"></script>
    <script src="<?php echo APP_URL ?>plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script> 
	 <script src="<?php echo APP_URL ?>plugins/countdown/jquery.countdown.min.js"></script>
    <script src="<?php echo APP_URL ?>assets/js/components/custom-countdown.js"></script>	
		
		
		
		 <script>
			$(document).ready(function() {
				App.init();
			});
		</script>
		
		
		<script>
				var $buoop = {
				  vs: {
					i: 9,
					f: 5,
					o: 12,
					s: 7,
					c: 10
				  },
				  reminder: 0,
				  text: "Your browser (%s) is out of date, and may not be compatible with our website. We recommend you to <a%s>update your browser</a>"
				};

				function $buo_f() {
				  var e = document.createElement("script");
				  e.src = "https://browser-update.org/update.min.js";
				  document.body.appendChild(e);
				};
				try {
				  document.addEventListener("DOMContentLoaded", $buo_f, false)
				} catch (e) {
				  window.attachEvent("onload", $buo_f)
				}

				$(document)
				  .ready(function ($) {
					function setHeight() {
					  windowHeight = $(window)
						.innerHeight();
					  $('.full-height')
						.css('min-height', windowHeight-130); // 40px for footer
					};
					setHeight();

					$(window)
					  .resize(function () {
						setHeight();
					  });
				  });

				 /*
				 *	Password matching
				 */
				  
				  $('#password, #password2').on('keyup', function () {
					  if ($('#password').val() == $('#password2').val()) {
						$('#message').html('Password matched!').css('color', 'green');
					  } else 
						$('#message').html('Password did not match.').css('color', 'red');
					});

				/*
				 *	Date picker
				 */
				
				$(function(){
					$('#birthdate').datepicker({
						format: 'dd-mm-yyyy',
						startDate: '01-01-1990'
					});
				});
				
				
				/*
				 *	Picture upload
				 */
				 
				$(function() {
				  // We can attach the `fileselect` event to all file inputs on the page
				  $(document).on('change', ':file', function() {
					var input = $(this),
						numFiles = input.get(0).files ? input.get(0).files.length : 1,
						label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
					input.trigger('fileselect', [numFiles, label]);
				  });

				  // We can watch for our custom `fileselect` event like this
				  $(document).ready( function() {
					  $(':file').on('fileselect', function(event, numFiles, label) {

						  var input = $(this).parents('.input-group').find(':text'),
							  log = numFiles > 1 ? numFiles + ' files selected' : label;

						  if( input.length ) {
							  input.val(log);
						  } else {
							  if( log ) alert(log);
						  }

					  });
				  });
				  
				});

				/*
				 * Dynamic Field
				 */
				var room = <?php if(isset($x)) echo $x-1; else echo 1; ?>;
				function education_fields() {
				 
					room++;
					var objTo = document.getElementById('education_fields');
					var divtest = document.createElement("tr");
					var rdiv = 'removeclass'+room;
					divtest.innerHTML = '<tr><td>'+room+'.</td><td><input id="course_no_'+room+'" name="course_no[]" class="form-control" type="text" cool></td><td><input id="course_title_'+room+'" name="course_title[]" class="form-control" type="text" cool></td><td><input id="course_credit_'+room+'" name="course_credit[]" class="form-control" type="text" cool></td></tr>';
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
				 * DataTable
				 */
				$(document).ready( function () {
					$('#applications').DataTable();
				});
				
				$(document).ready( function () {
					$('#datatable').DataTable();
				});
			</script>
			
			 <script>
				$('.dropify').dropify({
					messages: { 'default': 'Click to Upload or Drag n Drop', 'remove':  '<i class="flaticon-close-fill"></i>', 'replace': 'Upload or Drag n Drop' }
				});
			</script>
    </body>
</html>
