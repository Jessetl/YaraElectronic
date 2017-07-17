@extends('layouts.landing')

@section('html-content')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">REGISTRO DE PROVEEDORES</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Rif</th>
							<th>Nombre</th>
							<th>Telefono</th>
							<th>Email</th>
							<th>Direccion</th>
							<th>Descripción</th>
						</tr>
					</thead>
					<tbody>
					@foreach($proveedores as $prove)
						<tr>
						  <td>{{ $prove->nac_prov.$prove->rif.$prove->rif_ult }}</td>
						  <td>{{ $prove->nom_prov }}</td> 
						  <td>{{ $prove->telefono }}</td>
						  <td>{{ $prove->correo }} </td>
						  <td>{{ $prove->dir_prov }}</td>
						  <td>{{ $prove->descripcion</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		  <!-- /.box -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
@endsection 

@section('scripts')

<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : false,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
		})
	});
</script>
@endsection