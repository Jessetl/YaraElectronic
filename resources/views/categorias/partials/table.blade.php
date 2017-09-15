<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Unidad</th>
			<th>Nombre</th>
			<th>Creado</th>
			<th>Actualizado</th>
		</tr>
	</thead>
	<tbody>
	@foreach($categorias as $catego)
		<tr>
		  <td>{{ $catego->unidad_id }}</td> 
		  <td>{{ $catego->nom_cat }}</td>
		  <td>{{ $prove->created_at }} </td>
		  <td>{{ $prove->updated_at }}</td>
		</tr>
	@endforeach
	</tbody>
</table>