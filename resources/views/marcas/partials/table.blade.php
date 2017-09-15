<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Creado</th>
			<th>Actualizado</th>
		</tr>
	</thead>
		<tbody>
	@foreach($marcas as $marca)
		<tr>
		  <td>{{ $prove->nom_mar }}</td> 
		  <td>{{ $prove->create_at }}</td>
		  <td>{{ $prove->update_at }} </td>
		</tr>
	@endforeach
	</tbody>
	
</table>