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
					<h3 class="box-title">REGISTRO DE PERSONAL</h3>
					<a href="{{ route('personal.create') }}" class="pull-right">
						<span class="pull-right-container">
							<span class="btn btn-block btn-primary btn-flat"><i class="fa fa-user-plus"></i></span>
						</span>
					</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
							<thead>
									<tr>
										<th>Cédula</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Fecha de nacimiento</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Opciones</th>
									</tr>
								</thead>
								<tbody>
								@foreach($personal as $perso)
								<tr>
									<td>{{ $perso->nac_em.$perso->ced_em }}</td>
									<td>{{ $perso->nom_em }}</td> 
									<td>{{ $perso->ape_em }}</td>
									<td>{{ $perso->nac_fec }} </td>
									<td>{{ $perso->telf_em }}</td>
									<td>{{ $perso->email }}</td>
									<td></td>
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
