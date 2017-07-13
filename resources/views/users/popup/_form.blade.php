                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                     
														<span class="block input-icon input-icon-right">
															<input id="name" type="text" name="name" class="form-control" 
															placeholder="Nama" data-error="Please enter Nama Anda." 
                                                            value="{{ old('name') }}"required autofocus/>
															<i class="ace-icon fa fa-user"></i>
															<div class="help-block with-errors"></div>
                                                             @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                            @endif
														</span>
														
                                                    </div>                                                  
                                                </div>

                                                 
                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                                      
														<span class="block input-icon input-icon-right">
															<input id="username" type="text" name="username"
                                                            class="form-control" placeholder="Username" 
                                                            data-error="Please enter Username Anda." 
                                                            value="{{ old('username') }}"required autofocus/>
															<i class="ace-icon fa fa-user"></i>
															<div class="help-block with-errors"></div>
                                                             @if ($errors->has('username'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('username') }}</strong>
                                                            </span>
                                                            @endif
														</span>
													 	
                                                    </div>                                                  
                                                </div>

                                                
                                               	<div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                     
														<span class="block input-icon input-icon-right">
															<input id="email" type="text" name="email" class="form-control" 
															placeholder="E-Maill" data-error="Please enter Emaill Anda." 
                                                            value="{{ old('email') }}"required autofocus/>
															<i class="ace-icon fa fa-envelope-o"></i>
															<div class="help-block with-errors"></div>
                                                             @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                            @endif
														</span>
														
                                                    </div>                                                  
                                                </div>

                                                
                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    
														<span class="block input-icon input-icon-right">
															<input id="password" type="password" name="password"
                                                             class="form-control" placeholder="Password" 
                                                             data-error="Please enter Password Anda." 
                                                             value="{{ old('password') }}"required/>
															<i class="ace-icon fa fa-key"></i>
															<div class="help-block with-errors"></div>
                                                             @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                            @endif
														</span>
														
                                                    </div>                                                  
                                                </div>

                                                
                                                <div class="col-md-12">
                                                    <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                                                      <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="password-confirm" type="password" 
                                                            name="password_confirmation" class="form-control" 
                                                            placeholder="Re - Password" data-error="Please enter Re Password Anda." 
                                                            value="{{ old('password') }}"required/>
															<i class="ace-icon fa fa-key"></i>
														</span>
													  </label>		
                                                    </div>                                                  
                                                </div>

                                                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">                                    
                                                    <div class="col-md-12">
                                                           <select class="form-control"name="role_id" id="role_id">
                                                            
                                                                <option value="">------- Role -------</option>
                                                       
                                                             	@foreach($roles as $key => $roles)
																	<option value="{{ $roles->id }}">{{ $roles->name }}</option>
																@endforeach     
                                                           
                                                           </select>
                                                        
                                                    </div>
                                                </div>
