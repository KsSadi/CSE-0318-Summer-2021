        <div class="col-sm-9" id="body-content">
            <div class="panel panel-default full-height">
                <div class="panel-body">
					<?php if(isset($message)) echo $message; ?>

                    <div class="row text-center" style="padding-top:100px">
						<div class="col-sm-12 col-md-6 col-md-offset-3">
							<h2>Reset password</h2>
							<form action="" method="post">
								<div class="form-group">
									<input type="text" name="admission_roll" class="form-control" placeholder="Username/Admission Roll" value="<?php retrieve_value('admission_roll'); ?>" cool>
								</div>
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
								</div>
								<div class="clearfix">
									<a href="<?php echo APP_URL ?>login/" class="pull-left">Log in</a>
								</div>        
							</form>
							<p class="text-center"><a href="<?php echo APP_URL ?>registration/">Register</a></p>
						</div>
					</div>
                </div>
            </div>
        </div>