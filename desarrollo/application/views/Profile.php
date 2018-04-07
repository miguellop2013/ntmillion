<main class="container">
	<div class="row">
		<?php $data = ($this->session->userdata('logueado')); //Obtener datos de Sesion?>
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
				<h1 class="name-users"><?=$data[0]['name'] .' '.$data[0]['lastName']?></h1>
				<a href="#" class="btn btn-info mb-3"><i class="fa fa-user-plus"></i> Agregar a mis amigos</a>
				<div class="row justify-content-center">
					<div class="col">
						<form  id="form_subidas" action="<?=base_url();?>Publicar/Publicar" method="POST" enctype="multipart/form-data">
							<textarea name="description" id="description" placeholder="Publicar"></textarea>
							<div class="contenedor-botones d-flex justify-content-between">
								<div class="media">
								<input type="file" name="multimedia" id="multimedia" class="inputfile inputfile-5" data-multiple-caption="{count}" accept="image/x-png,image/gif,image/jpeg">
								<label for="file-6"><i class="fa fa-files-o"></i> <span></span></label>
								</div>
								<div>
									<button type="submit" id="publicar">Publicar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			<!-- Publicaciones -->
				<div class="publicacion mt-4">
					<?php  if($imagen != FALSE){ ?>
					<?php foreach ($imagen->result() as $row): ?>
						<!-- #2 Solo imagen -->
					      <div class="card mb-3 mx-auto col-12 p-0">
							  <div class="card-header">
							    <div class="media p-usuario">
							    	<div class="foto-u mr-3">
									  <img class="d-flex" src="<?=base_url()?>img/foto.jpg" alt="foto">
							    	</div>
								  <div class="media-body">
								    <h5 class="mt-3"><?=$row->name.' '.$row->lastName?></h5>
								    <p class="text-muted"><?=$row->date?></p>
								  </div>
								</div>
							  </div>
							   <?php  if ($row->multimedia) {?>
							  			<div class="card-body p-0">
							    			<?php if ($row->multimediaFormat == 'gif' || $row->multimediaFormat == 'jpg' || $row->multimediaFormat == 'png' || $row->multimediaFormat == 'jpeg'): ?>
							    			<img  src="<?=base_url()?>upload/<?=$row->multimedia.'.'.$row->multimediaFormat?>" alt="<?=$row->multimedia?>">
							    			<?php else: ?>
							    				<video style="width: 100%;height: 100%" controls>
												  <source src="<?=base_url()?>upload/<?=$row->multimedia.'.'.$row->multimediaFormat?>">
												</video>
							    			<?php endif ?>
										</div>

								<?php } ?>
							  <div class="card-footer">
							  	<!-- Like y Compartir -->
							  	<a href="#" class="card-link"><i class="fa fa-thumbs-o-up"></i></a>
					    		<a href="#" class="card-link"><i class="fa fa-commenting-o"></i></a>
					    		<a href="#" class="card-link"><i class="fa fa-share"></i></a>
								<!-- Pie de Foto -->
				    			<p class="card-text"><?=$row->description?></p>
								<!-- Comentarios -->
							    <p class="text-muted">Comentarios</p>
							    <div>
								    <div class="media comentarios mb-2">
								    	<div class="foto-c mr-3">
										  <img class="d-flex" src="<?=base_url()?>img/foto.jpg" alt="foto">
										</div>
									  <div class="media-body">
									    <p class="mt-0"><span class="usuario-name">Jose Vera</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quod eius cupiditate, omnis vel in et debitis nisi repellendus reiciendis id, laboriosam animi, beatae voluptatibus quae aspernatur obcaecati corrupti, unde.</p>
									  </div>
									</div>

									<!-- Formulario de Comenrario -->
									<form>
									  <div class="form-group">
									    <textarea class="form-control" id="comentario" name="comentario" rows="1" placeholder="Escribe un comentario..."></textarea>
									  </div>
									</form>	
							    </div>
							  </div>
						  </div> <!-- Fin #2 -->
					<?php endforeach; ?>
					<?php }else{
						echo "No Hay Post";
					} ?>
				</div><!-- Fin Publiaciones -->
			</div>
		</div>
	</div>
</main>

