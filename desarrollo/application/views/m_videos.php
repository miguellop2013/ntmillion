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
				
				<div class="row">
					<?php foreach ($imagen->result() as $row): ?>
						<div class="col-md-6 col-12">
			    			<?php if ($row->multimediaFormat == 'mp3' || $row->multimediaFormat == 'mp4' || $row->multimediaFormat == 'mkv' || $row->multimediaFormat == 'avi' || $row->multimediaFormat == '3gp'): ?>
					      		<div class="card mb-3 p-0">
								  <div class="card-body p-0">
				    				<video style="width: 100%;height: 100%" controls>
									  <source src="<?=base_url()?>upload/<?=$row->multimedia.'.'.$row->multimediaFormat?>">
									</video>
								  </div>
						  		</div>
			    			<?php endif ?>
						</div>
					<?php endforeach; ?>
				</div>
					
			</div>
		</div>
	</div>
</main>