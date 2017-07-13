                                                <div class="col-md-12">
                                                    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                                     
														<span class="block input-icon input-icon-right">
															<input id="name" type="text" name="name" class="form-control" 
															placeholder="Nama" data-error="Please enter Nama Anda." 
                                                            value="<?php echo e(old('name')); ?>"required autofocus/>
															<i class="ace-icon fa fa-user"></i>
															<div class="help-block with-errors"></div>
                                                             <?php if($errors->has('name')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
														</span>
														
                                                    </div>                                                  
                                                </div>

                                                 
                                                <div class="col-md-12">
                                                    <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                                                      
														<span class="block input-icon input-icon-right">
															<input id="username" type="text" name="username"
                                                            class="form-control" placeholder="Username" 
                                                            data-error="Please enter Username Anda." 
                                                            value="<?php echo e(old('username')); ?>"required autofocus/>
															<i class="ace-icon fa fa-user"></i>
															<div class="help-block with-errors"></div>
                                                             <?php if($errors->has('username')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('username')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
														</span>
													 	
                                                    </div>                                                  
                                                </div>

                                                
                                               	<div class="col-md-12">
                                                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                                     
														<span class="block input-icon input-icon-right">
															<input id="email" type="text" name="email" class="form-control" 
															placeholder="E-Maill" data-error="Please enter Emaill Anda." 
                                                            value="<?php echo e(old('email')); ?>"required autofocus/>
															<i class="ace-icon fa fa-envelope-o"></i>
															<div class="help-block with-errors"></div>
                                                             <?php if($errors->has('email')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
														</span>
														
                                                    </div>                                                  
                                                </div>

                                                
                                                <div class="col-md-12">
                                                    <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                                    
														<span class="block input-icon input-icon-right">
															<input id="password" type="password" name="password"
                                                             class="form-control" placeholder="Password" 
                                                             data-error="Please enter Password Anda." 
                                                             value="<?php echo e(old('password')); ?>"required/>
															<i class="ace-icon fa fa-key"></i>
															<div class="help-block with-errors"></div>
                                                             <?php if($errors->has('password')): ?>
                                                            <span class="help-block">
                                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                                            </span>
                                                            <?php endif; ?>
														</span>
														
                                                    </div>                                                  
                                                </div>

                                                
                                                <div class="col-md-12">
                                                    <div class="form-group<?php echo e($errors->has('password-confirm') ? ' has-error' : ''); ?>">
                                                      <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="password-confirm" type="password" 
                                                            name="password_confirmation" class="form-control" 
                                                            placeholder="Re - Password" data-error="Please enter Re Password Anda." 
                                                            value="<?php echo e(old('password')); ?>"required/>
															<i class="ace-icon fa fa-key"></i>
														</span>
													  </label>		
                                                    </div>                                                  
                                                </div>

                                                <div class="form-group<?php echo e($errors->has('role') ? ' has-error' : ''); ?>">                                    
                                                    <div class="col-md-12">
                                                           <select class="form-control"name="role_id" id="role_id">
                                                            
                                                                <option value="">------- Role -------</option>
                                                       
                                                             	<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<option value="<?php echo e($roles->id); ?>"><?php echo e($roles->name); ?></option>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
                                                           
                                                           </select>
                                                        
                                                    </div>
                                                </div>
