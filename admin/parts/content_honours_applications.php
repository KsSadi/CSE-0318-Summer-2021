	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Honours Applications
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo $admin_url ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Honours Applications</li>
          </ol>
        </section>
        <section class="content">
			<div class="box">
                <div class="box-body">
					<table class="table table-bordered table-striped" id="searchable">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Student name</th>
								<th>Year</th>
								<th>Semester</th>
								
								<th>Date</th>
								<th>Status</th>
								<th>Action</th>
							</tr>	
						</thead>
						<tbody>
						<?php $x=1; while($result = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?php  echo $x?></td>
								<td><?php echo get_user_info_single('name_en', $result['admission_roll']) ?></td>
								<td><?php echo $result['year_date'] ?></td>
								<td><?php echo $result['semester_month'] ?></td>
								
								<td><?php echo date('d-m-Y', $result['date']) ?></td>
								<td><?php echo $result['status'] == 0 ? '<span class="label label-warning">Pending</span>' : ($result['status'] == 1 ? '<span class="label label-success">Approved</span>':'<span class="label label-danger">Disapproved</span>') ?></td>
								<td>
									<a href="<?php echo $admin_url ?>honours_application.php?id=<?php echo $result['id'] ?>" class="btn btn-info btn-xs">View</a>
									<!--a href="<?php echo $admin_url ?>student_edit.php?id=<?php echo $result['id'] ?>" class="btn btn-primary btn-xs">Edit</a-->
								</td>
							</tr>
						<?php $x++; endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
        </section>
      </div>
