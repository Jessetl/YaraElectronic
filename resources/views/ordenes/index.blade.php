@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">ORDENES DE COMPRA</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>PROVEEDOR</th>
							<th>CODIGO</th>
							<th>FECHA DE SOLICITUD</th>
							<th>FECHA DE ENTREGA</th>
							<th>FECHA DE RECIBIDO</th>
							<th>MONTO</th>
							<th>ESTATUS</th>
							<th>DESCRIPCION</th>
						</tr>
					</thead>
					<tbody>
					@foreach($ordenes as $orde)
						<tr>
						  <td>{{ $orde->proveedor_id }}</td>
						  <td>{{ $orde->cod_or }}</td> 
						  <td>{{ $orde->fecha_sol }}</td>
						  <td>{{ $orde->fecha_en }} </td>
						  <td>{{ $orde->fecha_re }}</td>
						  <td>{{ $orde->monto_or }}</td>
						  <td>{{ $orde->descripcion }}</td>
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