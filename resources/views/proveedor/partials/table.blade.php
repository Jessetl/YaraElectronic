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
		  <td>{{ $prove->descripcion }}</td>
		</tr>
	@endforeach
	</tbody>
</table>