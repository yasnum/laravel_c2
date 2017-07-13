@extends('master.main')
@section('title2','Users')
@section('stycustm')


@endsection
@section('content')
@include('master.navbar')
@include('master.side')	
<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Pengaturan</a>
                        </li>
                        <li class="active">Users</li>
                    </ul><!-- /.breadcrumb -->			
			    </div>


			</div>

			<div class="page-content">			
				@include('master.setting')
				@yield('page-header')
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						@yield('pesan')
					
						@yield('testIsi')
					
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">Register </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" role="form" method="POST" action="{{ route('usere.store') }}">
                                                {{ csrf_field() }}

                                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="name" class="col-md-4 control-label">Name</label>

                                                    <div class="col-md-6">
                                                        <input id="role_id" type="text" class="form-control hide" name="role_id" value="3">
                                                        <input id="active" type="text" class="form-control hide" name="active" value="1">
                                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                 <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                                    <label for="name" class="col-md-4 control-label">Username</label>

                                                    <div class="col-md-6">
                                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                                                        @if ($errors->has('username'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('username') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class="col-md-4 control-label">Password</label>

                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                                    <div class="col-md-6">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                                    <label for="role" class="col-md-4 control-label">Roles</label>

                                                    <div class="col-md-6">
                                                           <select class="form-control"name="role_id" id="role_id">
                                                            
                                                                <option value="">-----------------</option>
                                                              
                                                                    <option value=""></option>
                                                           
                                                            </select>
                                                        
                                                    </div>
                                                </div>

                                             
                                                <div class="form-group">
                                                    <div class="col-md-6 col-md-offset-4">
                                                        <button type="submit" class="btn btn-success">
                                                            Register Users
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   

						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
</div><!-- /.main-content -->

@endsection