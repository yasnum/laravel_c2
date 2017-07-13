	<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
									<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
											</h4>
											
											<div class="space-6"></div>
											<p> Enter your details to begin: </p>
		       
		      </div>
		      <div class="modal-body">

					

										<form data-toggle="validator" action="{{ route('usere.store') }}" method="POST">
            									<!-- /////// {!!csrf_field()!!}-->
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="name" class="form-control" 
															 placeholder="Your Name" data-error="Please enter Your Name." required/>
															<i class="ace-icon fa fa-user"></i>
															<div class="help-block with-errors"></div>
														</span>
													</label>
													
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username" class="form-control" 
															placeholder="Username" data-error="Please enter Username." required/>
															<i class="ace-icon fa fa-user"></i>
															<div class="help-block with-errors"></div>
														</span>
													</label>		

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email"class="form-control" 
															placeholder="Email" data-error="Please enter Your Email." required/>
															<i class="ace-icon fa fa-envelope"></i>
															<div class="help-block with-errors"></div>
														</span>
													</label>													

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" 
															placeholder="Password" data-error="Please enter Your Password." required/>
															<i class="ace-icon fa fa-lock"></i>
															<div class="help-block with-errors"></div>
														</span>
													</label>

													<label class="block clearfix">
														<label for="role">Roles</label>													
														<span class="block input-icon input-icon-right">
															<select class="form-control"name="role_id" id="role_id">
															
																<option value=""></option>	
															
																<i class="ace-icon fa fa-retweet"></i>						
															</select>											
														</span>
													</label>

													<div class="space-20"></div>

													<div class="clearfix">
														<button type="reset" class="width-20 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button type="submit" class="width-25 pull-right btn crud-submit btn-sm btn-success">
															<span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>
										 
										<div class="toolbar center">
											<a href="#" data-dismiss="modal" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to View Users
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->



		      		<form data-toggle="validator" action="{{ route('Unore.store') }}" method="POST">
		      			<div class="form-group">
									<label class="control-label" for="title">Unit_Org:</label>
									<input type="text" name="Unit_Org" class="form-control" data-error="Please enter Unit_Org." required />
									<div class="help-block with-errors"></div>
								</div>
									<div class="form-group">
										<label class="control-label" for="title">Keterangan:</label>
										<textarea name="Keterangan" class="form-control" data-error="Please enter Keterangan." required></textarea>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<button type="submit" class="btn crud-submit btn-success" data-dismiss="modal">Submit</button>
									</div>
		      		</form>
		      </div>
		    </div>
		  </div>
		</div>