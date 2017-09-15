<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Categoria</th>
			<th>Marca</th>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Descripcion</th>
			<th>Stock minimo</th>
		</tr>
	</thead>
	<tbody>
	@foreach($productos as $produ)
		<tr>
		  <td>{{ $produ->categoria_id }}</td>
		  <td>{{ $produ->marca_id }}</td> 
		  <td>{{ $produ->cod_pro }}</td>
		  <td>{{ $produ->nom_pro }} </td>
		  <td>{{ $produ->precio }}</td>
		  <td>{{ $produ->descripcion }}</td>
		  <td>{{ $produ->stock_minimo }}</td>
		</tr>
	@endforeach
	</tbody>
</table>