<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('master.styless')
		@yield('stycustm')
	</head>
		
	<body class="no-skin">

				@yield('content')
				@include('master.footer')
				@include('master.scripts')
				@yield('scripts_custome')
</body>
</html>