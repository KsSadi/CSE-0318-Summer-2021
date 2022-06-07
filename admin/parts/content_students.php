	<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Students
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Students</li>
          </ol>
        </section>
        <section class="content">
			<div class="box">
                <div class="box-body">
					<table class="table table-bordered table-striped" id="students">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Picture</th>
								<th>Name</th>
								<th>Fathers' name</th>
								<th>Students ID</th>
								<th>Department</th>
								
								<th>Mobile</th>
								<th>Actions</th>
							</tr>	
						</thead>
						<tbody>
						<?php $x=1; while($result = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?php  echo $x?></td>
								<td><img src="<?php echo APP_URL.$result['picture'] ?>" width="50"></td>
								<td><?php echo $result['name_en'] ?></td>
								<td><?php echo $result['name_f'] ?></td>
								<td><?php echo $result['admission_roll'] ?></td>
								<td><?php echo $result['dept_s'] ?></td>
								
								<td><?php echo $result['mobile_no'] ?></td>
								<td>
									<a href="<?php echo $admin_url ?>student.php?id=<?php echo $result['id'] ?>" class="btn btn-success btn-xs">View</a>
									<!--a href="<?php echo $admin_url ?>student_edit.php?id=<?php echo $result['id'] ?>" class="btn btn-primary btn-xs">Edit</a -->
								</td>
							</tr>
						<?php $x++; endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
        </section>
      </div>
