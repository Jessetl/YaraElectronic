<!DOCTYPE html>
<html>
<head>
	@include('layouts.partials.htmlheader')
</head>
<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

	@include('layouts.partials.mainheader')

	<!-- Left side column. contains the logo and sidebar -->

	@include('layouts.partials.sidebar')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		
		@include('layouts.partials.contentheader')

		<!-- Main content -->
		<section class="content">

			@yield('content')

		</section>
		<!-- /.content -->
	</div>
	@include('layouts.partials.footer')
</div>
<!-- ./wrapper -->

@include('layouts.partials.scripts')

</body>
</html>
