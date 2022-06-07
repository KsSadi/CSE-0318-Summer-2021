	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Public Notices
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $admin_url ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Public Notices</li>
          </ol>
        </section>
			
        <section class="content">
			<div class="box">
                <div class="box-body">
					<table class="table table-bordered table-striped" id="datatable">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Title</th>
								<th>Message</th>
								<th>Files</th>
								<th>Date</th>
							</tr>	
						</thead>
						<tbody>
						<?php $x=1; while($result = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?php  echo $x?></td>
								<td><?php echo $result['title'] ?></td>
								<td><?php echo htmlspecialchars_decode($result['message']) ?></td>
								<td>
									<?php 
									// Files recovery from json
									$files_arr = json_decode($result['files']);
									foreach($files_arr as $files_indi):
									?>
									<a href="<?php echo APP_URL.$files_indi ?>">
										<?php echo substr($files_indi, 15); ?>
									</a><br>
									<?php endforeach; ?>
								</td>
								<td><?php echo date('d-m-Y', $result['date']) ?></td>
								
							</tr>
						<?php $x++; endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
        </section>
      </div>
