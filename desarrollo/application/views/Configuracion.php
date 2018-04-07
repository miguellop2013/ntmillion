<main class="container">
	<div class="row">
		<!-- BARRA LATERAL -->
		<div class="col-12 col-md-3 barra-lateral-izq" id="barra-lateral-izq">
			<div class="col image-profile borr">
				<img src="<?=base_url()?>img/foto.jpg" class="img-thumbnail" alt="">
			</div>
			<nav class="borr">
				<a href="#"><i class="fa fa-users"></i>Amigos</a>
				<a href="<?php echo base_url() ?>Ntmillion/misImagenes""><i class="fa fa-picture-o"></i>Imagenes</a>
				<a href="<?php echo base_url() ?>Ntmillion/misVideos""><i class="fa fa-film"></i>Videos</a>
				<a href="<?php echo base_url() ?>Settings/config"><i class="fa fa-cog"></i>Configuracion</a>
				<a href="<?=base_url().'Ntmillion/logOut'?>"><i class="fa fa-power-off"></i>Salir</a>
			</nav>
		</div>
		<a href="#" class="fondo-enlace d-md-none" id="fondo-enlace"></a>
		<!-- CONTENIDO PRINCIPAL -->
		<div class="col contenido-principal">
			<div class="publicar">
				<div class="row">
					<div class="col">
						<a href="#" class="btn-menu d-md-none d-flex justify-content-between" id="btn-menu">
							<span>menu</span>
							<i class="fa fa-bars"></i>
						</a>
					</div>
				</div>
				<!-- CONTENIDO INTERNO -->
				<div id="accordion">
				  <div class="card">
				    <div class="card-header p-0" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-info btn-block btn-lg" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          <i class="fa fa-picture-o"></i> Cambiar foto de perfil
				        </button>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">
				        Esto lo hago yo
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header p-0" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-success btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <i class="fa fa-user"></i> Modificar Datos
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				        INFORMACION LO HACE USTED
				        
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header p-0" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn btn-secondary btn-block btn-lg collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          <i class="fa fa-key"></i> Cambiar Contraseña
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
						<?php foreach ($registro->result() as $ro)  {
						?>
							<form class="bg-dxanger col-md-6 mx-auto" name="form1" method="post" action="<?php echo base_url('Ntmillion/actualizar')?>=$password">
								    <div class="form-group">
								    	<label for="">Actual</label>
								      <input type="password" id="password"  class="form-control" value="<?php echo $ro->password ?>" >
								    </div>
								    <div class="form-group">
								    	<label for="">Nueva</label>
								      <input type="password" class="form-control" id="password" name="password" >
								    </div>
								    <div class="form-group">
								    	<label for="">Repetir contraseña nueva</label>
								    <input type="password" id="password_nuevo"  class="form-control"  >
								    </div>  	  
								  	<button type="submit" id="btn_guardar"  class="btn btn-primary btn-block">Guardar cambios</button>
							</form>
						<?php  	
						}
						?>
				      </div>
				    </div>
				  </div>
				</div>	
			</div>
		</div>
	</div>
</main>				  