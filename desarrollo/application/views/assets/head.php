<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>css/admin.css">
    <!-- Emojin -->
    <link rel="stylesheet" href="<?=base_url()?>css/emojionearea.min.css">
    <script type="text/javascript" src="<?=base_url()?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>js/emojionearea.min.js"></script>
    <?php $data = ($this->session->userdata('logueado')); //Obtener datos de Logueo ?>
    <title>Ntmillons - <?=$data[0]['name'] .' '.$data[0]['lastName']?></title>
  </head>
  <body>
    <header>
    	<div class="container">
    		<div class="row justify-content-start">
    			<div class="col-auto logo d-none d-sm-block">
    				<a href="<?=base_url()?>Ntmillion/Home">
    					<img src="<?=base_url()?>img/logo-nav.png" alt="Ntmillons" class="img-fluid">
    				</a>
    			</div>
    			<div class="col-12 col-sm-8 col-lg-6 flex-last flex-sm-unordered buscar">
    				<form action="<?=base_url().'Ntmillion/searchPeople'?>" method="POST">
    					<div class="row no-gutters align-items-center">
    						<div class="col-10 columna">
    							<input type="text" name="search" id="search" placeholder="Amigos">
    						</div>
    						<div class="columna col-2">
    							<button><i class="fa fa-search"></i></button>
    						</div>
    					</div>
    				</form>
    			</div>
    			<nav class="col-12 col-sm-3 col-lg-2 menu d-flex justify-content-between ml-auto">
    				<a href="#"><i class="fa fa-users"></i></a>
    				<a href="#"><i class="fa fa-bell"></i></a>
    				<a href="#"><i class="fa fa-comments"></i></a>

    				<a href="<?=base_url()?>Perfil/Profile">
    					<img src="<?=base_url()?>img/fotoUser/defaul.jpg" alt="Perfil" width="22" height="22" class="img-fluid imagen">
    				</a>


    			</nav>
    		</div>
    	</div>
    </header>