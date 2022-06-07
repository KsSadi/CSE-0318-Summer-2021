	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Edit Student Information
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $admin_url ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo $admin_url ?>students.php">Students</a></li>
            <li class="active">Edit Student Information</li>
          </ol>
        </section>
        <section class="content">
			<?php if(isset($message)) echo $message; ?>
			<?php if($ok): ?>
			<div class="box">
                <div class="box-body">
					<form class="form-horizontal" method="POST" action="" autocomplete="off">
						<div class="well">
							<fieldset>
								<div class="form-group <?php has_error($error['name_bn']) ?>">
									<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_bn">শিক্ষার্থীর নাম (বাংলায়)</label>
									<div class="col-md-8 col-sm-6 col-xs-12 input-group">
										<input id="name_bn" name="name_bn" class="form-control" value="<?php get_value('name_bn'); ?>" type="text" required>
										<?php error_message('name_bn', $error['name_bn']) ?>
									</div>
								</div>
								<div class="form-group <?php has_error($error['name_en']) ?>">
									<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_en">শিক্ষার্থীর নাম (ইংরেজিতে)</label>
									<div class="col-md-8 col-sm-6 col-xs-12 input-group">
										<input id="name_en" name="name_en" class="form-control" value="<?php get_value('name_en'); ?>" type="text" required>
										<?php error_message('name_en', $error['name_en']) ?>
									</div>
								</div>
								<div class="form-group <?php has_error($error['mobile']) ?>">
									<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="mobile">মোবাইল নাম্বার</label>
									<div class="col-md-8 col-sm-6 col-xs-12 input-group">
										<input id="mobile" name="mobile" class="form-control" value="<?php get_value('mobile_no'); ?>" type="text" placeholder="01XXXXXXXXX" required>
										<?php error_message('mobile', $error['mobile']) ?>
									</div>
								</div>
								<div class="form-group <?php has_error($error['name_f']) ?>">
									<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_f">পিতার নাম </label>
									<div class="col-md-8 col-sm-6 col-xs-12 input-group">
										<input id="name_f" name="name_f" class="form-control" value="<?php get_value('name_f'); ?>" type="text" required>
										<?php error_message('name_f', $error['name_f']) ?>
									</div>
								</div>
								<div class="form-group <?php has_error($error['name_m']) ?>">
									<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_m">মাতার নাম </label>
									<div class="col-md-8 col-sm-6 col-xs-12 input-group">
										<input id="name_m" name="name_m" class="form-control" value="<?php get_value('name_m'); ?>" type="text" required>
										<?php error_message('name_m', $error['name_m']) ?>
									</div>
								</div>
								<div class="form-group <?php has_error($error['name_g']) ?>">
									<label class="col-md-4 col-sm-6 col-xs-12 control-label" for="name_g">অভিভাবকের নাম </label>
									<div class="col-md-8 col-sm-6 col-xs-12 input-group">
										<input id="name_g" name="name_g" class="form-control" value="<?php get_value('name_g'); ?>" type="text" required>
										<?php error_message('name_g', $error['name_g']) ?>
									</div>
								</div>
							</fieldset>
						</div>
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-12"><p><b>স্থায়ী ঠিকানা</b></p></div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['village']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="village">গ্রাম</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="village" name="village" class="form-control" value="<?php get_value('address_village'); ?>" type="text" required>
														<?php error_message('village', $error['village']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['upazilla']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="upazilla">উপজেলা</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="upazilla" name="upazilla" class="form-control" value="<?php get_value('address_upazilla'); ?>" type="text" required>
														<?php error_message('upazilla', $error['upazilla']) ?>
													</div>
												</div>
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['post_office']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="post_office">ডাকঘর</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="post_office" name="post_office" class="form-control" value="<?php get_value('address_postoffice'); ?>" type="text" required>
														<?php error_message('post_office', $error['post_office']) ?>
													</div>
												</div>		
												<div class="form-group <?php has_error($error['district']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="district">জেলা</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="district" name="district" class="form-control" value="<?php get_value('address_district'); ?>" type="text" required>
														<?php error_message('district', $error['district']) ?>
													</div>
												</div>										
											</fieldset>
										</div>
									</div>
								</div>
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<fieldset>
												<div class="form-group <?php has_error($error['present_address']) ?>">
													<label class="col-md-2 col-xs-6 control-label" for="present_address">বর্তমান ঠিকানা</label>
													<div class="col-md-10 col-xs-6 input-group">
														<input id="present_address" name="present_address" class="form-control" value="<?php get_value('address_present'); ?>" type="text" required>
														<?php error_message('present_address', $error['present_address']) ?>
													</div>
												</div>		
											</fieldset>
										</div>						
									</div>
								</div>
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group date <?php has_error($error['birthdate']) ?>"  data-provide="datepicker">
													<label class="col-md-4 col-xs-6 control-label" for="birthdate">জন্মতারিখ</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="birthdate" name="birthdate" class="form-control" value="<?php echo date('d-m-Y', get_value('birthdate', false)); ?>" type="text" autocomplete="off" required >
														<?php error_message('birthdate', $error['birthdate']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['nationality']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="nationality">জাতীয়তা</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="nationality" name="nationality" class="form-control" value="<?php get_value('nationality'); ?>" type="text" required>
														<?php error_message('nationality', $error['nationality']) ?>
													</div>
												</div>
											</fieldset>
										</div>
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<div class="form-group <?php has_error($error['religion']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="religion">ধর্ম</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="religion" name="religion" class="form-control" value="<?php get_value('religion'); ?>" type="text" required>
														<?php error_message('religion', $error['religion']) ?>
													</div>
												</div>		
												<div class="form-group <?php has_error($error['community']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="community">বর্ণ/সম্প্রদায়</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="community" name="community" class="form-control" value="<?php get_value('community'); ?>" type="text" required>
														<?php error_message('community', $error['community']) ?>
													</div>
												</div>										
											</fieldset>
										</div>
									</div>
								</div>						
								<div class="well">
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<fieldset>
												<legend>এসএসসি</legend>
												<div class="form-group <?php has_error($error['ssc_board']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_board">বোর্ড</label>
													<div class="col-md-8 col-xs-6 input-group">
														<select name="ssc_board" id="ssc_board" class="selectpicker form-control">
															<option>নির্বাচন করুন</option>
															<option value="Dhaka" <?php echo_selected('Dhaka', get_value('ssc_board', false)) ?>>ঢাকা বোর্ড</option>
															<option value="Rajshahi" <?php echo_selected('Rajshahi', get_value('ssc_board', false)) ?>>রাজশাহী বোর্ড</option>
															<option value="Comilla" <?php echo_selected('Comilla', get_value('ssc_board', false)) ?>>কুমিল্লা বোর্ড</option>
															<option value="Chittagong" <?php echo_selected('Chittagong', get_value('ssc_board', false)) ?>>চট্টগ্রাম বোর্ড</option>
															<option value="Sylhet" <?php echo_selected('Sylhet', get_value('ssc_board', false)) ?>>সিলেট বোর্ড</option>
															<option value="Dinajpur" <?php echo_selected('Dinajpur', get_value('ssc_board', false)) ?>>দিনাজপুর বোর্ড</option>
															<option value="Jessore" <?php echo_selected('Jessore', get_value('ssc_board', false)) ?>>যশোর বোর্ড</option>
															<option value="Barisal" <?php echo_selected('Barisal', get_value('ssc_board', false)) ?>>বরিশাল বোর্ড</option>
															<option value="Madrasa" <?php echo_selected('Madrasa', get_value('ssc_board', false)) ?>>মাদ্রাসা বোর্ড</option>
														</select>
														<?php error_message('ssc_board', $error['ssc_board']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_year']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_year">পাশের সাল</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_year" name="ssc_year" class="form-control" value="<?php get_value('ssc_year'); ?>" type="text" placeholder="2010" required>
														<?php error_message('ssc_year', $error['ssc_year']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_roll']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_roll">রোল</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_roll" name="ssc_roll" class="form-control" value="<?php get_value('ssc_roll'); ?>" type="text"  placeholder="123456" required>
														<?php error_message('ssc_roll', $error['ssc_roll']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_grade']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_grade">প্রাপ্ত গ্রেড</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_grade" name="ssc_grade" class="form-control" value="<?php get_value('ssc_grade'); ?>" type="text" placeholder="A+" required>
														<?php error_message('ssc_grade', $error['ssc_grade']) ?>
													</div>
												</div>
												<div class="form-group <?php has_error($error['ssc_gpa']) ?>">
													<label class="col-md-4 col-xs-6 control-label" for="ssc_gpa">প্রাপ্ত জিপিএ</label>
													<div class="col-md-8 col-xs-6 input-group">
														<input id="ssc_gpa" name="ssc_gpa" class="form-control" required="true" value="<?php get_value('ssc_gpa'); ?>" placeholder="5.00" type="text">
														<?php error_message('ssc_gpa', $error['ssc_gpa']) ?>
													</div>
												</div>
											</fieldset>
										</div>
								<div class="col-sm-12 col-md-6">
									<fieldset>
										<legend>এইচএসসি</legend>
										<div class="form-group <?php has_error($error['hsc_board']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="hsc_board">বোর্ড</label>
											<div class="col-md-8 col-xs-6 input-group">
												<select name="hsc_board" id="hsc_board" class="selectpicker form-control">
													<option>নির্বাচন করুন</option>
													<option value="Dhaka" <?php echo_selected('Dhaka', get_value('hsc_board', false)) ?>>ঢাকা বোর্ড</option>
													<option value="Rajshahi" <?php echo_selected('Rajshahi', get_value('hsc_board', false)) ?>>রাজশাহী বোর্ড</option>
													<option value="Comilla" <?php echo_selected('Comilla', get_value('hsc_board', false)) ?>>কুমিল্লা বোর্ড</option>
													<option value="Chittagong" <?php echo_selected('Chittagong', get_value('hsc_board', false)) ?>>চট্টগ্রাম বোর্ড</option>
													<option value="Sylhet" <?php echo_selected('Sylhet', get_value('hsc_board', false)) ?>>সিলেট বোর্ড</option>
													<option value="Dinajpur" <?php echo_selected('Dinajpur', get_value('hsc_board', false)) ?>>দিনাজপুর বোর্ড</option>
													<option value="Jessore" <?php echo_selected('Jessore', get_value('hsc_board', false)) ?>>যশোর বোর্ড</option>
													<option value="Barisal" <?php echo_selected('Barisal', get_value('hsc_board', false)) ?>>বরিশাল বোর্ড</option>
													<option value="Madrasa" <?php echo_selected('Madrasa', get_value('hsc_board', false)) ?>>মাদ্রাসা বোর্ড</option>
												</select>
												<?php error_message('hsc_board', $error['hsc_board']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['hsc_year']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="hsc_year">পাশের সাল</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="hsc_year" name="hsc_year" class="form-control" value="<?php get_value('hsc_year'); ?>"  placeholder="2012" type="text" required>
												<?php error_message('hsc_year', $error['hsc_year']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['hsc_roll']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="hsc_roll">রোল</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="hsc_roll" name="hsc_roll" class="form-control" value="<?php get_value('hsc_roll'); ?>" type="text"  placeholder="123456" required>
												<?php error_message('hsc_roll', $error['hsc_roll']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['hsc_grade']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="hsc_grade">প্রাপ্ত গ্রেড</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="hsc_grade" name="hsc_grade" class="form-control" value="<?php get_value('hsc_grade'); ?>"  placeholder="A+" type="text" required>
												<?php error_message('hsc_grade', $error['hsc_grade']) ?>
											</div>
										</div>
										<div class="form-group <?php has_error($error['hsc_gpa']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="hsc_gpa">প্রাপ্ত জিপিএ</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="hsc_gpa" name="hsc_gpa" class="form-control" value="<?php get_value('hsc_gpa'); ?>" type="text"  placeholder="5.00" required>
												<?php error_message('hsc_gpa', $error['hsc_gpa']) ?>
											</div>
										</div>
									</fieldset>
								</div>
							</div>
						</div>
						<div class="well">
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<fieldset>
										<div class="form-group">
											<label class="col-md-4 col-xs-6 control-label" for="admission_roll">ভর্তির রোল</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="admission_roll" name="admission_roll" class="form-control" value="<?php get_value('admission_roll'); ?>" type="text" disabled>
											</div>
										</div>
										<div class="form-group <?php has_error($error['reg_no']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="reg_no">রেজিস্ট্রেশন</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="reg_no" name="reg_no" class="form-control" value="<?php get_value('reg_no'); ?>" type="text" required>
												<?php error_message('reg_no', $error['reg_no']) ?>
											</div>
										</div>
									</fieldset>
								</div>
								<div class="col-sm-12 col-md-6">
									<fieldset>
										<div class="form-group <?php has_error($error['admission_year']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="admission_year">ভর্তির সন</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="admission_year" name="admission_year" class="form-control" value="<?php get_value('admission_year'); ?>" type="text"  placeholder="2012" required>
												<?php error_message('admission_year', $error['admission_year']) ?>
											</div>
										</div>		
										<div class="form-group <?php has_error($error['session']) ?>">
											<label class="col-md-4 col-xs-6 control-label" for="session">সেশন</label>
											<div class="col-md-8 col-xs-6 input-group">
												<input id="session" name="session" class="form-control" value="<?php get_value('session'); ?>"  placeholder="2012-13" type="text" required>
												<?php error_message('session', $error['session']) ?>
											</div>
										</div>										
									</fieldset>
								</div>
							</div>
						</div>
						<p class="text-center ">
							<button class="btn btn-success" name="submit" role="button">Update</button>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteWarning">
								Delete
							</button>
						</p>
					</form>
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
							<p>Do you really want to delete <?php echo get_value('name_en', false) ?>'s profile in this website?  All applications, notices and other information related with this student will be deleted which cannot be undone.</p>
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
