<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nacionalidad</th>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Genero</th>
			<th>Telefono</th>
			<th>Dirección</th>
			
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