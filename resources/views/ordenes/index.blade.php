@extends('layouts.landing')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">ORDENES DE COMPRA</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				@include('ordenes.partials.table')
			</div>
			<!-- /.box-body -->
		</div>
		  <!-- /.box -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
@endsection 
