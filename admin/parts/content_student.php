	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Student Information
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $admin_url ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo $admin_url ?>students.php">Students</a></li>
            <li class="active">Student Information</li>
          </ol>
        </section>
        <section class="content">
			<?php if(isset($message)) echo $message; ?>
			<?php if($ok): ?>
			<div class="box">
                <div class="box-body">
					<table class="table table">
						<table class="table table">
						<tbody>
							<tr>
								<td>Picture</td>
								<td><img src="<?php echo APP_URL.$info['picture']; ?>" width="200" class="center-block"</td>
							</tr>
							
							<tr>
								<td>Name</td>
								<td><?php echo $info['name_en']; ?></td>
							</tr>
							
							<!--tr>
								<td>Student ID</td>
								<td><?php echo current_user(); ?></td>
							</tr-->
							<tr>
								<td>Admission Year</td>
								<td><?php echo $info['admission_year']; ?></td>
							</tr>
							<tr>
								<td>Department</td>
								<td><?php echo $info['dept_s']; ?></td>
							</tr>
							<tr>
								<td>Batch</td>
								<td><?php echo $info['batch']; ?></td>
							</tr>
							
							<tr>

								<td>Mobile</td>
								<td><?php echo $info['mobile_no']; ?></td>
							</tr>
							<tr>
								<td>E-mail</td>
								<td><?php echo $info['mail']; ?></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td><?php echo $info['gender']; ?></td>
							</tr>
							<tr>
								<td>Date Of Birth</td>
								<td><?php echo date('d-m-Y', $info['birthdate']); ?></td>
							</tr>
							<tr>
								<td>Religion</td>
								<td><?php echo $info['religion']; ?></td>
							</tr>
							<tr>
								<td>Nationality</td>
								<td><?php echo $info['nationality']; ?></td>
							</tr>
							<tr>
								<td>Blood</td>
								<td><?php echo $info['blood']; ?></td>
							</tr>
							<tr>
								<td>Father's Name</td>
								<td><?php echo $info['name_f']; ?></td>
							</tr>
							<tr>
								<td>Father's Occuption</td>
								<td><?php echo $info['occuption_f']; ?></td>
							</tr>
							<tr>
								<td>Mother's Name</td>
								<td><?php echo $info['name_m']; ?></td>
							</tr>
							<tr>
								<td>Mother's Occuption</td>
								<td><?php echo $info['occuption_m']; ?></td>
							</tr>
							<tr>
								<td>Guardian's Name</td>
								<td><?php echo $info['name_g']; ?></td>
							</tr>
							<tr>
								<td>Relationship With Guardian's</td>
								<td><?php echo $info['relation_g']; ?></td>
							</tr>
							<tr>

								<td>Guardian's Mobile</td>
								<td><?php echo $info['mobile_g']; ?></td>
							</tr>
							
							<tr>
								<td colspan="2"><h4>Present Address</h4></td>
							</tr>
							<tr>
								<td>House</td>
								<td><?php echo $info['present_house']; ?></td>
							</tr>
							<tr>
								<td>Road</td>
								<td><?php echo $info['present_road']; ?></td>
							</tr>
							<tr>
								<td>Area</td>
								<td><?php echo $info['present_area']; ?></td>
							</tr>
							<tr>
								<td>City</td>
								<td><?php echo $info['present_city']; ?></td>
							</tr>
							
							
							
							<tr>
								<td colspan="2"><h4>Permanent Address</h4></td>
							</tr>
							<tr>
								<td>Village</td>
								<td><?php echo $info['address_village']; ?></td>
							</tr>
							<tr>
								<td>Post Office</td>
								<td><?php echo $info['address_postoffice']; ?></td>
							</tr>
							<tr>
								<td>Upazilla</td>
								<td><?php echo $info['address_upazilla']; ?></td>
							</tr>
							<tr>
								<td>District</td>
								<td><?php echo $info['address_district']; ?></td>
							</tr>
							
							<tr>
								<td>Nationality</td>
								<td><?php echo $info['nationality']; ?></td>
							</tr>
							<tr>
								<td>Religion</td>
								<td><?php echo $info['religion']; ?></td>
							</tr>
							
							<tr>
								<td colspan="2"><h4>SSC Details</h4></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $info['ssc_board']; ?></td>
							</tr>
							<tr>
								<td>Year</td>
								<td><?php echo $info['ssc_year']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $info['ssc_roll']; ?></td>
							</tr>
							<tr>
								<td>Grade</td>
								<td><?php echo $info['ssc_grade']; ?></td>
							</tr>
							<tr>
								<td>GPA</td>
								<td><?php echo $info['ssc_gpa']; ?></td>
							</tr>
							<tr>
								<td>Institute</td>
								<td><?php echo $info['institute_ssc']; ?></td>
							</tr>
							<tr>
								<td colspan="2"><h4>HSC Details</h4></td>
							</tr>
							<tr>
								<td>Board</td>
								<td><?php echo $info['hsc_board']; ?></td>
							</tr>
							<tr>
								<td>Year</td>
								<td><?php echo $info['hsc_year']; ?></td>
							</tr>
							<tr>
								<td>Roll</td>
								<td><?php echo $info['hsc_roll']; ?></td>
							</tr>
							<tr>
								<td>Grade</td>
								<td><?php echo $info['hsc_grade']; ?></td>
							</tr>
							<tr>
								<td>GPA</td>
								<td><?php echo $info['hsc_gpa']; ?></td>
							</tr>
							<tr>
								<td>Institute</td>
								<td><?php echo $info['institute_hsc']; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal modal-danger fade" id="deleteWarning">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Confirm delete</h4>
						</div>
						<div class="modal-body">
							<p>Do you really want to delete <?php echo get_value('name_en', false) ?>'s profile in this website? All applications and other info related with this student will be deleted which cannot be undone.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<a type="button" href="<?php $admin_url ?>student_edit.php?id=<?php echo $id ?>&delete" class="btn btn-outline">Delete</a>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</section>
	</div>
