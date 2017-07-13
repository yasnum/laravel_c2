        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield('title2')</title>
		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!-- csrf-token -->
		<meta name="csrf-token" content="{{ csrf_token() }}" >
		
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" /> 
		<link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
			<!-- page specific plugin styles -->
		<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" /> 
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.gritter.min.css') }}" />	
		<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" /> 
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" /> 
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-editable.min.css') }}" />
		<!-- text fonts -->
		<link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" /> 
		<!-- ace styles -->
		<link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" /> 
		<!--[if lte IE 9]>-->
		<link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
		<link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" /> 
		<link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" /> 
		<!-- ace settings handler -->
		<script src="{{ asset('assets/js/ace-extra.min.js') }}"></script> 

	