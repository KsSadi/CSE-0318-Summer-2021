	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            New Public Notice
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $admin_url ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li>Add new</li>
            <li class="active">Public notice</li>
          </ol>
        </section>
        <section class="content">
			<?php if(isset($message)) echo $message ?>
			<div class="box box-warning">
                <div class="box-body">
                  <form role="form" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group <?php has_error($error['title']) ?>">
                      <label for="title">Title</label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="" value="<?php retrieve_value('title'); ?>">
					  <?php error_message('title', $error['title']) ?>
                    </div>
                    <div class="form-group <?php has_error($error['message']) ?>">
                      <label for="message">Message</label>
                      <textarea  name="message" id="message" class="form-control" rows="3" placeholder=""><?php retrieve_value('message'); ?></textarea>
					  <?php error_message('message', $error['message']) ?>
                    </div>
					<div class="form-group" id="files_input">
						<label>Attach files</label>
						<div id="file_input">
							<input type="file" name="file_1">
						</div>
						<p class="help-block">Supported file types: PDF, DOC, JPG, PNG.</p>
					</div>
					
					<div class="input-group-btn">
						<button class="btn btn-success btn-xs" type="button"  onclick="file_fields();"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add more files</button>
					</div>
					<div class="form-group margin text-center">
                      <button class="btn btn-flat btn-success" role="button" name="submit">Add</button>
                    </div>
					
                  </form>
                </div><!-- /.box-body -->
              </div>
        </section>
      </div>
