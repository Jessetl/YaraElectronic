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