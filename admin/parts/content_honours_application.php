	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Honours exam application
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $admin_url ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Honours exam application</li>
          </ol>
        </section>
        <section class="content">
			<div class="callout callout-success" style="display:none;" id="successCallout">
				<h4>Success</h4>
				<p>The application was deleted.</p>
			</div>
			<div class="callout callout-danger" style="display:none;" id="failedCallout">
				<h4>Failed</h4>
				<p>The application could not be deleted. Try again.</p>
			</div>
			<?php if(isset($message)) echo $message; ?>
			<?php if($ok): ?>
			<div class="box">
                <div class="box-body">
					<iframe style="width:100%;height:500px;" src="<?php echo APP_URL.'download-honours-application-form/'.$ai['id']; ?>"></iframe>
					<a href="<?php $admin_url ?>honours_application.php?id=<?php echo $id ?>&approve" type="button" class="btn btn-success">Approve</a>
					<!--a href="<?php $admin_url ?>honours_application.php?id=<?php echo $id ?>&" type="button" class="btn btn-info">Edit</a-->
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#disapprove">
						Disapprove
					</button>
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
						Delete
					</button>
				</div>
			</div>
			<div class="modal modal-danger fade" id="disapprove">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="" method="POST" id="myForm">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Reason for disapproval</h4>
							</div>
							<div class="modal-body">
								
								<p>Provide a reason for disapproving the application. It will be sent to the applicant as a notice.</p>
								<div class="form-group">
									<input name="id" value="<?php echo $id ?>" type="hidden">
									<input name="admission_roll" value="<?php echo $ai['admission_roll'] ?>" type="hidden">
									<textarea name="reason" class="form-control bg-red" rows="3" placeholder="Enter ..."></textarea>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
								<button type="submit" name="submit" class="btn btn-outline" >Disapprove</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal modal-danger fade" id="deleteModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="" method="POST" id="deleteForm">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Confirm delete.</h4>
							</div>
							<div class="modal-body">
								<p>Are you sure you want to delete this application?</p>
								<div class="form-group">
									<input name="id" value="<?php echo $id ?>" type="hidden">
									<input name="admission_roll" value="<?php echo $ai['admission_roll'] ?>" type="hidden">
									<input name="type" value="honours_application" type="hidden">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
								<button type="submit" name="submit" class="btn btn-outline" >Delete</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal modal-danger fade" id="failed">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Failed</h4>
						</div>
						<div class="modal-body">
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal modal-success fade" id="success">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Success</h4>
						</div>
						<div class="modal-body">
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</section>
	</div>
