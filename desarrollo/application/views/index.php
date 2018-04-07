<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ntmillion</title>
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>img/favicon.ico">
       <!-- Scroll -->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 1500, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });
    </script>
</head>
<body>
	<header id="Home">
		<nav id="menu" class="navegacion navbar navbar-expand-lg fixed-top">
		  <span class="navbar-brand"><img src="<?=base_url()?>img/logo-nav.png" alt="Logo Ntmillons" class="img-fluid"></span>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <i class="fa fa-bars" style="color:white;"></i>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			      <li class="nav-item">
			        <a class="nav-link" data-scroll href="#Home"><i class="fa fa-home"></i> <span class="sr-only">Inicio</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" data-scroll href="#Nosotros">Nosotros</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" data-scroll href="#Servicios">Servicios</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" data-scroll href="#Registro">Registarse <span class="sr-only">Inicio</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link log-in" href="#" data-toggle="modal" data-target="#LoginModal" id="#LoginModal">Ingresar</a>
			      </li>
			    </ul>
		  </div>
		</nav>
		<div id="carouselInicio" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100 animated fadeIn" src="<?=base_url()?>img/social.jpg" alt="Social Usuario">
			        <div class="carousel-caption d-none d-md-block text-left p-3 animated fadeInDown">
					    <h3 class="text-center">Lorem ipsum dolor sit3amet.</h5>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, corporis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quo, tenetur aliquam aliquid saepe cupiditate veniam porro optio necessitatibus, numquam amet sit, sed ut non.</p>
				    </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100 animated fadeIn" src="<?=base_url()?>img/ntmillon.jpg" alt="NtMillion Social">
			        <div class="carousel-caption d-none d-md-block text-left p-3 animated fadeInDown">
					    <h3 class="text-center">Lorem ipsum dolor.</h3>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, exercitati Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt nemo illo eligendi mollitia maiores quaerat ratione consequatur necessitatibus dolorum dicta, ex similique veniam tenetur natus.onem!</p>
				    </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100 animated fadeIn" src="<?=base_url()?>img/money.png" alt="Dinero">
			        <div class="carousel-caption d-none d-md-block text-left p-3 animated fadeInDown">
					    <h3 class="text-center">Lorem ipsum dolor.</h3>
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, qui Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit repudiandae reiciendis sequi quisquam, at alias, dolores aliquid. Laborum mollitia rem ut saepe deleniti voluptate ad!a.</p>
				    </div>
			    </div>
		  </div>
		</div>
  	</header>
	<div class="container-fluid p-0 nosotros bg-light">
		<i id="Nosotros"></i><br>
		<div class="etiqueta p-5">
			<h1>
				Nosotros
				<p class="mb-0 line w-25 mx-auto"></p>
			</h1>
		</div>
	    <div class="row">
	    	<div id="img-1" class="col-md-6 image">
	    	</div>
	    	<div class="col-md-6 p-5">
	    		<h2>Lorem ipsum dolor sit.</h2>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis unde, a vel non ut ad, error, nemo quis, minus atque perferendis ex nulla nam possimus beatae officia tempore at sunt fugiat laudantium. Repellat qui totam consequuntur, non dolorum, culpa commodi.</p>
	    		<p>Repudiandae amet, tempora incidunt sed commodi. Ratione quaerat amet eos at voluptatibus, suscipit pariatur, expedita reiciendis nemo culpa incidunt veniam eveniet nostrum impedit dolores sapiente laboriosam vero, officiis veritatis quia! Voluptatibus cupiditate odio, unde consequatur temporibus earum ipsum. Voluptatibus, sed.</p>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-6 p-5">
	    		<h2>Lorem ipsum dolor.</h2>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis unde, a vel non ut ad, error, nemo quis, minus atque perferendis ex nulla nam possimus beatae officia tempore at sunt fugiat laudantium. Repellat qui totam consequuntur, non dolorum, culpa commodi.</p>
	    		<p>Repudiandae amet, tempora incidunt sed commodi. Ratione quaerat amet eos at voluptatibus, suscipit pariatur, expedita reiciendis nemo culpa incidunt veniam eveniet nostrum impedit dolores sapiente laboriosam vero, officiis veritatis quia! Voluptatibus cupiditate odio, unde consequatur temporibus earum ipsum. Voluptatibus, sed.</p>
	    	</div>
	    	<div id="img-2" class="col-md-6 image">
	    	</div>
	    </div>
	</div>
	<i id="Servicios"></i>
	<div class="container-fluid p-5 servicios">
			<div class="etiqueta2 pr-3 text-right">
				<h1>Servicios</h1>
			</div>
		<div class="container">
			<div class="row mb-2">
		        <div class="col-md-4">
						<div class="card">
						  <div class="card-img-top p-2 text-center">
						  	<i class="fa fa-laptop" aria-hidden="true"></i>
						  </div>
						  <div class="card-body">
						  	<h4 class="card-title text-center">Registrate</h4>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>		        	
		        </div>
		        <div class="col-md-4" style="border-left: 2px solid white; border-right: 2px solid white">
						<div class="card">
						  <div class="card-img-top p-2 text-center">
						  	<i class="fa fa-globe" aria-hidden="true"></i>
						  </div>
						  <div class="card-body">
						  	<h4 class="card-title text-center">Navega</h4>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>	        	
		        </div>
		        <div class="col-md-4">
						<div class="card">
						  <div class="card-img-top p-2 text-center">
						  	<i class="fa fa-trophy" aria-hidden="true"></i>
						  </div>
						  <div class="card-body">
						  	<h4 class="card-title text-center">Gana</h4>
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>		        	
		        </div>
		     
		    </div>
		</div>
	</div>
	<div class="container-fluid">
		<i id="Registro"></i>
		<div class="row">
			<div class="col-md-7">
			<div class="etiqueta p-5 mt-5">
				<h1>
					Registrarse
					<p class="mb-0 line w-25 mx-auto"></p>
				</h1>
			</div>
				<form class="col-md-10 mx-auto form-regis mb-5" action="<?=base_url()?>Ntmillion/singUp" method="POST" >
					<div class="form-row">
						<div class="form-group col-md-12">
					      <input type="text" class="form-control" id="userName" name="userName" placeholder="Nombre de Usuario">
					    </div>
						<div class="form-group col-md-12">
				      	  <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
					    </div>
					</div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="text" class="form-control" id="apellido" name="lastName" placeholder="Apellido">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
				    </div>
				    <div class="form-group col-md-6">
				      <input type="password" class="form-control" id="password2" name="password2" placeholder="Repetir Contraseña">
				    </div>
				  </div>
				  
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <input type="date" class="form-control" id="fecha_nacimiento" name="birth" placeholder="Fecha de Nacimiento">
				    </div>
				    <div class="form-group col-md-12">
				    	<label class="col-form-label pr-5" for="sexo">Sexo</label>
						<div class="text-center">
							<div class="form-check-inline">	
							  <label class="custom-control custom-radio">
							    <input id="radioStacked3" name="gender" type="radio" >
							    <span class="custom-control-indicator"></span>
							    <span class="custom-control-description">Hombre</span>
							  </label>
							</div>
						  <div class="form-check-inline">	
						  	<label class="custom-control custom-radio">
						  	  <input id="radioStacked4" name="gender" type="radio" >
						  	  <span class="custom-control-indicator"></span>
						  	  <span class="custom-control-description">Mujer</span>
						  	</label>
						  </div>
						</div>
				    </div>
				    <div class="form-group col-md-12">
				      <select id="pais" name="country" class="form-control custom-select">
				        <option selected disabled="">Pais</option>
				        <option>...</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				  	<a href="#" class="text-muted d-inline mr-2" data-toggle="modal" data-target="#TerminosModal">Terminos y Condiciones</a>
				    <div class="form-check d-inline">
						<label class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input">
						  <span class="custom-control-indicator"></span>
						  <span class="custom-control-description">Acepto los terminos</span>
						</label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary btn-block">Regístrate</button>
				</form>
			</div>
			<div class="col-md-5 image-registrar p-0">
				
			</div>
		</div>
	</div>
	
	

	<!-- Modal Login -->
	<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content modal-login">
	      <div class="modal-header">

	        <h5>Iniciar Sesión</h5>
	        <p>Ntmillion</p>

	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="container">
				<form class="col-md-8 mx-auto p-3" action="<?=base_url().'Ntmillion/singIn'?>" method="POST">
				  <div class="form-group">
				    <input type="text" class="form-control" id="userName" name="email" placeholder=" Email">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
				  </div>
				  <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
				</form>
				<div class="container text-center p-3">
					<a href="#" class="text-muted">¿Olvidaste la Contraseña?</a>
				</div>
			</div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Terminos y Condiciones-->
	<div class="modal fade" id="TerminosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header mx-auto">
	        <h5 class="modal-title" id="exampleModalLabel">Terminos y Condiciones</h5>
	      </div>
	      <div class="modal-body">
	        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto odit molestiae ut deserunt itaque aut impedit voluptatem aliquam corporis minima maxime, rem repellat facere quae iure odio, vero accusamus culpa amet autem consequatur dicta alias assumenda quia dolores. Dignissimos, soluta!</p>
	        <p class="text-justify">Fugit impedit harum molestiae obcaecati aspernatur dolore qui, illum quod ipsa quisquam ea, laborum. Nostrum laudantium repellat eum, velit quisquam accusamus impedit accusantium esse, aliquid et eveniet beatae facilis magnam inventore minus. Minus minima, ex soluta illum molestiae similique unde?</p>
	        <p class="text-justify">Doloremque, nobis aspernatur tenetur deserunt, alias incidunt accusantium nesciunt animi magni asperiores sunt, laboriosam. Tenetur quod excepturi, id facilis nihil modi nulla ut voluptas cum at labore delectus, quam, neque. Consequatur ipsum officiis est ut magnam delectus, beatae facilis repellat.</p>
	        <p class="text-justify">Nemo harum ipsa, modi sapiente maiores repellendus! Sequi repellendus debitis, et, quae quidem a perferendis, quaerat hic modi eum dolorem minima assumenda, nulla natus atque. Laudantium tempora dolor, harum animi magnam? Magnam distinctio quas, dolorem quis cum. Est, exercitationem nulla.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
    <footer class="footer p-4">
      <div class="container">
      	<div class="row">
      		<div class="col-md-9">
				<nav class="nav">
				  <a class="nav-link active" href="#">Español (España)</a>
				  <a class="nav-link" href="#">English (US)</a>
				  <a class="nav-link" href="#">Français (France)</a>
				  <a class="nav-link" href="#">Português (Brasil)</a>
				</nav>
      		</div>
      		<div class="col-md-3 text-right">
        		<span class="text-muted font-weight-bold copyright">&copy;2018 Ntmillion</span>
      		</div>
      	</div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="js/jquery-slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/holder.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript">
    	  $(window).scroll(function() {
    if ($("#menu").offset().top > 56) {
        $("#menu").addClass("bg-inverse");
    } else {
        $("#menu").removeClass("bg-inverse");
    }
  });
    </script>
</body>
</html>