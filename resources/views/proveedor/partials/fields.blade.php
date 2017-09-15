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
		<label>Rif</label>
		<input class="form-control" placeholder="10087765" type="text" maxlength="9" min="8" max="9" required>
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
	        <label>Teléfono</label>
	        <div class="input-group">
	          	<div class="input-group-addon">
	            	<i class="fa fa-phone"></i>
	          	</div>
	          	<input type="text" name="telf_em" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask>
	        </div>
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
	<div class="col-lg-4">
		<div class="form-group">
			<label for="">Descripción</label>
			<textarea class="form-control" name="descripción" ></textarea>
			
		</div>
		
	</div>
</div>