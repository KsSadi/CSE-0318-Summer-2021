<div class="col-lg-4">


			
			
<div class="blog_right_sidebar">
<aside class="single_sidebar_widget search_widget">

<div class="br"></div>
</aside>

<?php if(is_logged_in()) : ?>
			<?php
				$admission_roll =  current_user();
				$user_info = get_user_info(array('name_en', 'picture'), $admission_roll);
				
				$sql = "SELECT id FROM private_notice WHERE admission_roll='$admission_roll' AND is_read='0'";
				$query = mysqli_query($conn, $sql);
				$unread_count = mysqli_num_rows($query);
			?>
<aside class="single_sidebar_widget author_widget">
<img class="author_img rounded-circle" src="<?php echo APP_URL.$user_info['picture']; ?>"alt="<?php echo $user_info['name_en']; ?>">
<h4><?php echo $user_info['name_en']; ?></h4>

<p><?php echo current_user(); ?></p>







<aside class="single_sidebar_widget post_category_widget">
</br>
<ul class="list cat-list">
<li>
<a href="<?php echo APP_URL ?>" class="d-flex justify-content-left">
	<i class="fas fa-home"></i> Overview </a>
</li>
<li>
<a href="<?php echo APP_URL ?>update-profile/" class="d-flex justify-content-left">
						<i class="far fa-user"></i> Update profile </a>
</li>
<li>
<a href="<?php echo APP_URL ?>change-picture/" class="d-flex justify-content-left">
						<i class="fas fa-image"></i> Change picture </a>
</li>
<li>
<a href="<?php echo APP_URL ?>change-password/" class="d-flex justify-content-left">
						<i class="fas fa-key"></i> Change password</a>
</li>

<li>
<a href="<?php echo APP_URL ?>my-notices/" class="d-flex justify-content-left">
						<i class="fab fa-facebook-messenger"></i> My Notice 
<p><?php if($unread_count >0) echo '<span class="label pull-right bg-primary">'.$unread_count.'</span>'; ?></p>
</a>
</li>
<li>
<a href="<?php echo APP_URL ?>logout/" class="d-flex justify-content-left">
					<i class="fas fa-sign-out-alt"></i> 
							Log out</a>
</li>

 </ul>

<div class="br"></div>
</aside>
 	<?php endif; ?>


<aside class="single-sidebar-widget newsletter_widget">
<h4 class="widget_title">Notices</h4>

<ul class="list-group">
					<?php
					$sql = "SELECT id, title, date FROM public_notice ORDER BY date DESC LIMIT 5";
					$query = mysqli_query($conn, $sql);
					while($result = mysqli_fetch_assoc($query)):
					?>
					<li class="list-group-item">
						<p class="list-group-item-text">
							<a href="<?php echo APP_URL.'notice/'.$result['id']; ?>"><?php echo $result['title'] ?></a> <i><?php echo date('d-m-Y', $result['date']); ?></i>
						</p>
					</li>
					<?php endwhile; ?>
					<li class="list-group-item">
						<p class="list-group-item-text">
							<a href="<?php echo APP_URL.'notices/'; ?>">See all notices</a>
						</p>
					</li>
				</ul>
<div class="br"></div>
</aside>


</div>
</div>