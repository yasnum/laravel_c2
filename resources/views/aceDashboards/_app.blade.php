@include('aceDashboards._head')
@section('title','Asyafisio')
<body class="no-skin">
    @include('aceDashboards._navbar')

    <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            @include('aceDashboards._sidebar')
            <div class="main-content">
                <div class="main-content-inner">         
                    @yield('breadcrumbs')
                    <div class="page-content">
                        @include('aceDashboards._setting')
                        <div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                 @yield('CONTENT')
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row --> 
                    </div><!-- /.page-content -->
                </div>
			</div><!-- /.main-content -->    
        @include('aceDashboards._footer') 
    </div><!-- /.main-container -->
@include('aceDashboards._ground')