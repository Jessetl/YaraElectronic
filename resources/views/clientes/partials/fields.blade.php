<div class="row">
	<div class="col-lg-2">
		<div class="form-group">
			<label>Nacionalidad</label>
			<select class="form-control" name="nac_cli" required>
				<option value="V-">V</option>
				<option value="E-">E</option>
			</select>
		</div>	
	</div>	
	<div class="col-lg-4">
		<label>Cédula</label>
		<input class="form-control" placeholder="10087765" type="text" maxlength="8" min="7" max="8" name="ced_cli" required>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
		<div class="form-group">
			<label for="">Nombres</label>
			<input type="text" class="form-control" id="nom_cli" placeholder="Henderson" name="nom_cli" maxlength="55" required>	
		</div>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
			<label for="">Apellidos</label>
			<input type="text" class="form-control" id="ape_cli" placeholder="Bolivar" name="ape_cli" maxlength="55" required>	
		</div>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
  			<label>Género</label>
  			<select class="form-control" name="genero" required>
  				<option value="" selected> Seleccione </option>
    			<option value="V-"> Masculino </option>
    			<option value="E-"> Femenino </option>
  			</select>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
			<label>Telefono</label>
			<input class="form-control" placeholder="10087765" type="text" maxlength="8" min="7" max="10" name="ced_cli" required>	
			</select>			
		</div>		
	</div>
	<div class="col-lg-4">
		<div class="form-group">
		<label>Dirección</label>
		<textarea class="form-control" name="dir_cli" type="text" required ></textarea>
			
		</div>
	</div>
</div>
