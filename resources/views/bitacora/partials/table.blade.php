<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Operación</th>
			<th>Fecha</th>
			<th>Hora</th>
		</tr>
	</thead>
	<tbody>
	@foreach($bitacora as $bitaco)
		<tr>
		  <td>{{ $bitaco->nom_user }}</td>
		  <td>{{ $bitaco->operacion }}</td> 
		  <td>{{ $bitaco->fecha }}</td>
		  <td>{{ $bitaco->hora }} </td>
		</tr>
	@endforeach
	</tbody>
</table>