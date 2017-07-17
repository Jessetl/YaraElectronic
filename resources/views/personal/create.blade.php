@extends('layouts.landing')

@section('html-content')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endsection

@section('content')

	<div class="row">
        <div class="col-lg-12">
          	<div class="box ">
            	<div class="box-header with-border">
              		<h3 class="box-title">REGISTRO NUEVO PERSONAL</h3>
              		<span class="pull-right">
						<span style="font-weight: 300px;"> LOS CAMPOS CON (*) SON OBLIGATORIOS </span>
					</span>
            	</div>
        
	            <form role="form">
	              	<div class="box-body">
	              		<div class="row">
	              			<div class="col-lg-2">
	              				<div class="form-group">
				                 	<label>Nacionalidad</label>
				                  		<select class="form-control" name="nac_em" required>
				                    	<option value="V-"> V </option>
				                    	<option value="E-"> E </option>
				                  	</select>
				                </div>
	              			</div>
	              			<div class="col-lg-4">
	              				<label>Cédula</label>
	              				<input class="form-control" placeholder="11111111" type="text" maxlength="8" min="7" max="8" required>
	              			</div>
	              		</div>
	              		<div class="row">
		              		<div class="col-lg-4">
			                	<div class="form-group">
			                  		<label for="">Nombres</label>
			                  		<input type="text" class="form-control" id="nom_em" placeholder="Henderson" name="nom_em" maxlength="55" required>
			                	</div>
		              		</div>
		              		<div class="col-lg-4">
			                	<div class="form-group">
			                  		<label for="">Apellidos</label>
			                  		<input type="text" class="form-control" id="ape_em" placeholder="Bolivar" name="ape_em" maxlength="55" required>
			                	</div>
		                	</div>
		                	<div class="col-lg-4">
			                	<div class="form-group">
			                  		<label>Género</label>
			                  		<select class="form-control" name="genero" required>
			                  			<option value=""> Seleccione </option>
			                    		<option value="V-"> Masculino </option>
			                    		<option value="E-"> Femenino </option>
			                  		</select>
			                	</div>
		                	</div>
		                	<div class="col-lg-4">
		                		<div class="form-group">
			                  		<label>Género</label>
			                  		<select class="form-control" name="edo_civil" required>
			                  			<option value=""> Seleccione </option>
			                    		<option value="Soltero/a"> Soltero/a </option>
			                    		<option value="Casado/a"> Casado/a </option>
			                    		<option value="Viudo/a"> Viudo/a </option>
			                  		</select>
			                	</div>
		                	</div>
		                	<div class="col-lg-4">
		                		<div class="form-group">
					                <label>Teléfono</label>
					                <div class="input-group">
					                  	<div class="input-group-addon">
					                    	<i class="fa fa-phone"></i>
					                  	</div>
					                  	<input class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" type="text" name="telf_em">
					                </div>
					            </div>
		                	</div>
		                	<div class="col-lg-4">
		                		<div class="form-group">
                					<label>Fecha de Nacimiento</label>
                  					<input class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" type="date" name="nac_fec" required>
              					</div>
		                	</div>
		                	<div class="col-lg-4">
		                		<div class="form-group">
			                  		<label for="">E-mail</label>
			                  		<input type="text" class="form-control" id="ape_em" placeholder="ejemplo@hotmail.com" name="email" maxlength="55" required>
			                	</div>
		                	</div>
		                	<div class="col-lg-8">
		                		<div class="form-group">
			                  		<label for="">Dirección</label>
			                  		<input type="text" class="form-control" id="dir_em" name="dir_em" placeholder="Cagua, Jesús de Nazareth Calle #3 Casa #45" name="dir_em" maxlength="255">
			                	</div>
		                	</div>
		              	</div>
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

@section('scripts')
<!-- InputMask -->
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
  	$(function () {
  		//Datemask dd/mm/yyyy
    	$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
  	})
</script>
@endsection