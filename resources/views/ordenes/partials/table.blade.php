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