@extends('layouts.landing')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">REGISTRO DE USUARIOS</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Roles</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Remember token</th>
		
						</tr>
					</thead>
					<tbody>
					@foreach($usuarios as $usu)
						<tr>
						  <td>{{ $usu->rol_id }}</td>
						  <td>{{ $usu->nombre }}</td> 
						  <td>{{ $usu->email }}</td>
						  <td>{{ $usu->password }}</td>
						  <td>{{ $usu->remember_token }}</td>
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