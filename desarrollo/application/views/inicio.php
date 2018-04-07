<main class="container">
	<div class="row">
		<!-- BARRA LATERAL -->
		<div class="col-12 col-md-3 barra-lateral-izq" id="barra-lateral-izq">
			<nav>
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
				<div class="row justify-content-center">
					<div class="col-auto foto">
						<a href="<?php echo base_url() ?>Ntmillion/userPerfil"><img src="<?=base_url()?>img/fotoUser/defaul.jpg" alt="Perfil"></a>
					</div>
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
					    		<a href="#" onclick="verComentarios(<?=$row->id?>)" class="card-link"><i class="fa fa-commenting-o"> <?=$row->contador_comentarios?></i></a>
					    		<a href="#" class="card-link"><i class="fa fa-share"></i></a>
								<!-- Pie de Foto -->
				    			<p class="card-text"><?=$row->description?></p>
								<!-- Comentarios -->
							    <p class="text-muted" id="label_comentarios">Comentarios</p>
							    <div>
							        <div id="comentarios">
        								    
								    </div>

									<!-- Formulario de Comenrario -->
									<form onsubmit='return comentar(this,<?=$row->id?>)' method="POST" action="#">
									    <input type='text' name='post' value='<?=$row->id?>' hidden='true'>
									  <input type='text' name='friend' value='<?=$_SESSION["logueado"][0]["iDuser"]?>' hidden='true'>
									  <div class="form-group">
									    <textarea class="form-control comentario" name="comentario" rows="1" placeholder="Escribe un comentario..." id="<?=$row->id?>"></textarea >
									    <input type='submit' class="btn btn-primary">
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
</main>
<script type='text/javascript'>
    function comentar(formulario,id)
    {
        $.ajax({
          type: 'POST',
          data: $(formulario).serialize(),
          url: '<?=base_url()."Perfil/comentar"?>',
          cache: false,
          success: function(html){
           // $("#results").append(html);
           $('.emojionearea-editor').text('');
           $('#comentarios').html(html);
           
          }
        });
        
        return false;
        
    }
    
    function verComentarios(post)
    {
        $.ajax({
          url: '<?=base_url()."Perfil/verComentarios/"?>'+post.toString(),
          success: function(html){
           $('#comentarios').html(html);
           
          }
        });
        
        return false;
        
    }
</script>

