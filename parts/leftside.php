
                                

                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <div class="search-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0" style="margin-bottom:5px;margin-top:20px;margin-left:8px;margin-right:20px;">
                                        <button type="button" class="btn btn-success mb-4 mr-2 rounded bs-tooltip ml-2" style="width:100%;">
                                           <a style="color:white;" href="<?php echo APP_URL ?>honours-form-fill-up/">Pre Registration</a>
                                        </button>
										<button type="button" class="btn btn-info mb-4 mr-2 rounded bs-tooltip ml-2" style="width:100%;">
                                          <a style="color:white;" href="<?php echo APP_URL ?>honours-application-list/">Application List</a>
                                        </button>
										
                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="profile-info-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="mb-4"><i class="flaticon-user-plus"></i> Profile info</h4>                                                
                                                <p class="mb-3"><span class="usr-work-position">Studying BSc </span> in <a href="#"><?php echo $info['dept_s']; ?></a></p>
                                                <p class="mb-3"><span class="usr-work-position">Batch </span>No   <a href="#"><?php echo $info['batch']; ?></a></p>
                                                <p class="mb-3"><span class="usr-work-position">Student </span>ID   <a href="#"><?php echo current_user(); ?></a></p>
                                                <p class="mb-3"><span class="usr-work-position">Mobile: </span><a href="tel:<?php echo $info['mobile_no']; ?>"><?php echo $info['mobile_no']; ?></a> </p>
                                                <p class="mb-3"><span class="usr-work-position">Email: </span> <a href = "mailto:<?php echo $info['mail']; ?>"><?php echo $info['mail']; ?></a></p>
                                                <p class="mb-3"><span class="usr-work-position">Lives </span>In <a href="#"><?php echo $info['present_area']; ?>,<?php echo $info['present_city']; ?></a></p>                                                
                                                <p>Joined SUB in <?php echo $info['admission_year']; ?></p>
                                                <div class="social-networks-section mt-5">
                                                    <h4 class="mb-4">Other Networks</h4>
                                                    <div class="row">
                                                        <div class="col-sm-12 text-center">
                                                             <a href="https://<?php echo $info['fb'];?>"><div class="btn btn-outline-primary btn-rounded mb-4 mr-2">Facebook</div> </a>
                                                            <a href="https://<?php echo $info['github'];?>"><div class="btn btn-outline-dark btn-rounded mb-4 mr-2">Github</div></a>
                                                            <a href="https://<?php echo $info['linkedIn'];?>"><div class="btn btn-outline-info btn-rounded mb-4 mr-2">LinkedIn</div></a>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="friends-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h4 class=""><i class="flaticon-bell"></i> Notice</h4>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <ul class="list-group list-group-flush">
																								   
															<?php
															$sql = "SELECT id, title, date FROM public_notice ORDER BY date DESC LIMIT 5";
															$query = mysqli_query($conn, $sql);
															while($result = mysqli_fetch_assoc($query)):
															?>
															<li class="list-group-item">
																<p class="text-left">
																	<a href="<?php echo APP_URL.'notice/'.$result['id']; ?>"><?php echo $result['title'] ?></a> 
																</p>
															</li>
															<?php endwhile; ?>
															<li class="list-group-item">
																<p class="list-group-item-text">
																	<a href="<?php echo APP_URL.'notices/'; ?>">See all notices</a>
																</p>
															</li>
				
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

					


                                </div>