@extends('layouts.landing')

@section('content')

	<div class="row">
		<div class="col-lg-12">
			<div class="box ">
				<div class="box-header with-border">
					<h3 class="box-title">REGISTRO DE CATEGORÍA</h3>
					<span class="pull-right">
						<span style="font-weight: 300px;"> LOS CAMPOS CON (*) SON OBLIGATORIOS </span>
					</span>
				</div>
		
				<form role="form">
					<div class="box-body">
						@include('categorias.partials.fields')
					</div>
					<div class="box-footer">
						<button type="reset" class="btn btn-danger btn-flat">CANCELAR</button>
						<button type="submit" class="btn btn-primary btn-flat pull-right">GUARDAR</button>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection 
