@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">CLIENTES/h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>NACIONALIDAD</th>
							<th>CEDULA</th>
							<th>NOMBRE</th>
							<th>APELLIDO</th>
							<th>GENERO</th>
							<th>TELEFONO</th>
							<th>DIRECCIÓN</th>
							
						</tr>
					</thead>
					<tbody>
					@foreach($clientes as $clien)
						<tr>
						  <td>{{ $clien->nac_cli }}</td>
						  <td>{{ $clien->ced_cli }}</td> 
						  <td>{{ $orde->nom_cli }}</td>
						  <td>{{ $orde->ape_cli }} </td>
						  <td>{{ $orde->genero }}</td>
						  <td>{{ $orde->telf_cli }}</td>
						  <td>{{ $orde->dir_cli }}</td>
						 
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