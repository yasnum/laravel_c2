		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{asset('assets/ace/js/jquery-2.1.4.min.js') }}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('assets/ace/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
		</script>
		<script src="{{asset('assets/ace/js/bootstrap.min.js') }}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{asset('assets/ace/js/ace-elements.min.js') }}"></script>
		<script src="{{asset('assets/ace/js/ace.min.js') }}"></script>

		<!-- inline scripts related to this page -->
        @yield('script')
	</body>
</html>
