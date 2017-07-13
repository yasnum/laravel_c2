@extends('master.main')
@section('title2','Users')
@section('stycustm')
	<meta name="csrf-token" content="{{ csrf_token() }}">
<!--	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">  -->

@endsection
@section('content')
@include('master.navbar')
@include('master.side')

	<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			    <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="#">Pengaturan</a>
            </li>
            <li class="active">Users</li>
          </ul><!-- /.breadcrumb -->			
			</div>

			<div class="page-content">
            @include('master.setting')
            @yield('page-header')
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
						@yield('pesan')
						@yield('testIsi')

            <div class="table-header">
              <button type="button" class="btn btn-sm btn-success btn-white btn-round" 
                data-toggle="modal" data-target="#create">
                <i class="ace-icon fa fa-plus bigger-110 green"></i>
                Add
              </button> 
              | Data Users 
            </div>
          
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
                                      
            </table>
            <ul id="pagination" class="pagination-sm"></ul>
						<!-- PAGE CONTENT ENDS -->
						
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->
		</div>
		@include('users.popup.register')
		@include('users.popup.editUser')
	</div><!-- /.main-content -->
  </div>
@endsection

@section('scripts_custome')
	<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/js/jquery310.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/js/bootstrap4alp.min.js') }}"></script> 
   <script type="text/javascript" src="{{ asset('assets/js/jquery.twbsPagination.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script> 
   
   <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet"> 
	 <script src="{{ asset('assets/js/validator.min.js') }}"></script> 
   <script type="text/javascript">
    	   var url = "<?php echo route('usere.index')?>";
   </script>
   <script src="{{ asset('js/user.js') }}"></script> 



@endsection