<div class="section clearfix" id="join">
						<div class="col-md-12">

							<h1 class="text-center">Join Us</h1>
							<div class="separator"></div>
							<p class="lead text-center">You can join Startup Afghanistan as a:</p>
							
							<!-- Tabs start -->
							<!-- ================ -->
							<div class="vertical hc-tabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa fa-magic pr-10"></i> Joining as a Startup</a></li>
									<li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-life-saver pr-10"></i> Joining as a Mentor</a></li>
									<li><a href="#tab3" role="tab" data-toggle="tab"><i class="fa fa-expand pr-10"></i>  Joining as a Partner</a></li>
									<li><a href="#tab4" role="tab" data-toggle="tab"><i class="fa fa-file-o pr-10"></i>  Joining as a Volunteer</a></li>
								</ul>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab1">
										<h1 class="text-center title">Very Flexible</h1>
										<div class="space"></div>
										<div class="row">
											<div class="col-md-6">
												<?php require("forms/example.php"); ?>
											</div>
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
												<p>Quo expedita tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
												<a href="page-services.html" class="btn btn-default">Read more</a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab2">
										<div class="row">
											<script>
											            function checkMyForm(mentor_form) {
											                if($(mentor_form).parsley().validate()) {
											                    console.info('');
											                } else {
											                    console.error('Please select at least one check-box!');
											                }
											            }
											        </script>
									<form class="form-horizontal" id="mentor_form" name="mentor_form" method="get" action="#" data-parsley-validate>

											<div class="col-md-6">
												<?php require("forms/mentor_1.php"); ?>
											</div>
											<div class="col-md-6">
												<?php require("forms/mentor_2.php"); ?>
											</div>
									</form>

										</div>
									</div>
									<div class="tab-pane fade" id="tab3">
										<h1 class="text-center title">100% Responsive</h1>
										<div class="space"></div>
										<div class="row">
											<div class="col-md-6">
												<ul class="list-icons">
													<li><i class="icon-check pr-10"></i> Aut earum numquam hic placeat</li>
													<li><i class="icon-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="icon-check pr-10"></i> Vitae magnam commodi repellendus</li>
													<li><i class="icon-check pr-10"></i> Expedita placeat omnis pariatur</li>
													<li><i class="icon-check pr-10"></i> Fugiat rem consequatur neque</li>
													<li><i class="icon-check pr-10"></i> Lorem ipsum dolor sit amet maiores</li>
													<li><i class="icon-check pr-10"></i> Consectetur adipisicing elit</li>
												</ul>
											</div>
											<div class="col-md-6">
												<p>Ipsum dolor sit amet, consectetur adipisicing elit. Facere hic qui non placeat ad explicabo dignissimos amet iusto veniam!</p>
												<p>Tempore modi minima at adipisci saepe excepturi alias consequuntur sunt asperiores enim ut assumenda hic vitae, odio deleniti illo, veniam quas!</p>
												<a href="page-services.html" class="btn btn-default">Read more</a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab4">
										  <div class="row">
												        <script>
												            function checkMyForm(volunteer_form) {
												                if($(volunteer_form).parsley().validate()) {
												                    console.info('');
												                } else {
												                    console.error('Please select at least one check-box!');
												                }
												            }
												        </script>
										      <form class="form-horizontal" id="volunteer_form" name="volunteer_form" method="get" action="#" data-parsley-validate>

												 <div class="col-md-6">
													<?php require("forms/volunteer_1.php"); ?>
												 </div>
												 <div class="col-md-6">
													<?php require("forms/volunteer_2.php"); ?>
												 </div>
										      </form>

									      </div>
									</div>
								</div>
							</div>
							<!-- tabs end -->
				
						</div>
			</div>
			<!-- section end -->

