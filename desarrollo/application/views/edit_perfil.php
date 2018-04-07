<h1>Editar perfil</h1>
<?php foreach ($single_student as $row): ?>
	<form class="col-md-5 mx-auto form-regis" action="<?=base_url()?>SitioAdmin/modificarPerfil/" method="POST"  enctype="multipart/form-data">
					<input type="text" value="<?php echo $row->iDuser ?> ">
					<div class="form-row">
						<div class="form-group col-md-12">
					      <input type="text" class="form-control" id="userName" name="userName" placeholder="Nombre de Usuario" value="<?php echo $row->userName ?> ">
					    </div>
						<div class="form-group col-md-12">
				      	  <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" value="<?php echo $row->email ?> ">
					    </div>
					</div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="<?php echo $row->name ?>">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellido" value="<?php echo $row->lastName ?>">
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="exampleInputFile" >Foto de perfil</label>	
				      <input type="file" id="profilePic" name="profilePic" value="<?php echo $row->profilePic ?> ">
				    </div>
				  </div>

				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <input type="date" class="form-control" id="fecha_nacimiento" name="birth" placeholder="Fecha de Nacimiento" value="<?php echo $row->birth ?>">
				      </div> 
				    <div class="form-group col-md-12">
				    	<label class="col-form-label pr-5" for="sexo">Sexo</label>
						<div class="text-center">
							<div class="form-check-inline">	
							  <label class="custom-control custom-radio">
							    <input type="radio" id="radioStacked3" name="gender" >
							    <span class="custom-control-indicator"></span>
							    <span class="custom-control-description">Hombre</span>
							  </label>
							</div>
						  <div class="form-check-inline">	
						  	<label class="custom-control custom-radio">
						  	  <input type="radio" id="radioStacked4" name="gender" >
						  	  <span class="custom-control-indicator"></span>
						  	  <span class="custom-control-description">Mujer</span>
						  	</label>
						  </div>
						</div>
				    </div>
				    <div class="form-group col-md-12">
				      <select id="pais" name="country" class="form-control custom-select" value="<?php echo $row->country ?>">
				        <option selected disabled="">Pais</option>
				        <option>...</option>
				      </select>
				    </div>
				  </div>
				  <div>
				  	<button type="submit" name="submit" class="btn btn-primary btn-block">Actualizar</button>
				  </div>
				  
	</form>		
	<?php endforeach; ?>