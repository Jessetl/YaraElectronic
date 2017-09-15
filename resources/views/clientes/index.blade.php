@extends('layouts.landing')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">CLIENTES</h3>
				<a href="{{ route('clientes.create') }}" class="pull-right">
					<span class="pull-right-container">
						<span class="btn btn-block btn-primary btn-flat"><i class="fa fa-plus"></i></span>
					</span>
				</a>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				@include('clientes.partials.table')
			</div>
			<!-- /.box-body -->
		</div>
		  <!-- /.box -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
@endsection 
