<!--Right Side Content-->
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">

									<div class="search-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0" style="margin-bottom:5px;margin-top:30px;margin-left:8px;margin-right:20px;">
                                        <button type="button" class="btn btn-info mb-4 mr-2 rounded bs-tooltip ml-2" style="width:100%;">
                                           <a style="color:white;" href="<?php echo APP_URL ?>calculator.php"><i class="flaticon-bell"></i> Notice</a>
                                        </button>
										<button type="button" class="btn btn-warning mb-4 mr-2 rounded bs-tooltip ml-2" style="width:100%;">
                                           <a style="color:white;" href="<?php echo APP_URL ?>calculator.php"><i class="flaticon-calculator"></i> Fees Calculation</a>
                                        </button>
										
                                
                                            </div>
                                        </div>
                                    </div>


										<div class="slideshow-section mb-4">
											<div class="card" style="">
												<div class="card-body p-0">
													<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner">
															<div class="carousel-item active">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s4.jpg" alt="First slide">
															</div>
															
															
															<div class="carousel-item">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s1.png" alt="First slide">
															</div>
															<div class="carousel-item">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s2.jpg" alt="Second slide">
															</div>
															<div class="carousel-item">
																<img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s3.jpg" alt="Third slide">
															</div>
														</div>
														<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
															<span class="icon flaticon-left-arrow" aria-hidden="true"></span>
															<span class="sr-only">Previous</span>
														</a>
														<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
															<span class="icon flaticon-right-arrow" aria-hidden="true"></span>
															<span class="sr-only">Next</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									  <div class="active-feeds-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body">
                                                <h4 class="">Educational Activity</h4>

                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="<?php echo APP_URL.$info['picture']; ?>" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented"><?php echo $info['name_en']; ?></span> <br>  is now studying <?php echo $info['dept_s']; ?> from  <span class="comment-topic">State University Of Bangladesh</span>  </h5>
                                                        <p class="meta-time"><?php echo $info['admission_year']; ?> - Present</p>
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="<?php echo APP_URL.$info['picture']; ?>" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented"><?php echo $info['name_en']; ?></span> <br> passed H.S.C on  <?php echo $info['hsc_year']; ?> with  <?php echo $info['hsc_gpa']; ?> from <span class="comment-topic"><?php echo $info['institute_hsc']; ?></span> </h5>
                                                        
                                                    </div>
                                                </div>
                                                <div class="media pb-4 pt-4">
                                                    <img class="mr-3" src="<?php echo APP_URL.$info['picture']; ?>" alt="admin-profile">
                                                    <div class="media-body">
                                                        <h5 class="mt-0"><span class="usr-commented"><?php echo $info['name_en']; ?></span> <br> passed S.S.C on  <?php echo $info['ssc_year']; ?> with  <?php echo $info['ssc_gpa']; ?> from <span class="comment-topic"><?php echo $info['institute_ssc']; ?></span> </h5>
                                                        
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="calendar-section mb-4">
                                        <div class="card pb-3" style="">
                                            <div class="card-body">
                                                <div id="calendar" class="bx-top-6">
                                                    <div class="pb-5 mb-2 bx-top-6">
                                                        <div id="monthrow" class="bx-top-6">
                                                            <button id="prev" onclick="prevMonth()">&#10094;</button>
                                                            <span id="monthc"></span>
                                                            <button id="next" onclick="nextMonth()">&#10095;</button>
                                                        </div>
                                                        <div class="daysoftheweek">
                                                            <div>Su</div>
                                                            <div>Mo</div>
                                                            <div>Tu</div>
                                                            <div>We</div>
                                                            <div>Th</div>
                                                            <div>Fr</div>
                                                            <div>Sa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                    <div class="slideshow-section mb-4">
                                        <div class="card" style="">
                                            <div class="card-body p-0">
                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s4.jpg" alt="First slide">
                                                        </div>
														
														
														<div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s1.png" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s2.jpg" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="<?php echo APP_URL ?>assets/img/s3.jpg" alt="Third slide">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                        <span class="icon flaticon-left-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                        <span class="icon flaticon-right-arrow" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  
                                </div>
								    <!--  END Right Side CONTENT PART  -->