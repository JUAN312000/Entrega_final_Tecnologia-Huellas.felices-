   <?php
include ('header.php');
   ?>
   <style type="text/css">
   	.balazo{
   		margin-top: -2em;
   		color: white !important;
    	font-size: 4em !important;
   	}
   	.balazo1{
   		color: white !important;
    	font-size: 2em !important;
   	}
   	.nosotros{
    		font-size: 1.2em;
    		color:black;
    		font-weight: 700;
    }
    .nombre{
    		text-align: center;
    		font-size: 2em;
    		color: black;
    		font-weight:700;
    		text-transform: uppercase;
    }
    .textoadopcion {
    margin-bottom: 0px;
    color: #fbae3f;
    font-size: 14px;
    font-weight: 600;
 
    text-align: justify;
}

   </style>
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php"> <img src="images/logo.png" class="logo"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="index.php" class="nav-link">Inicio</a></li>
	        	<li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item active"><a href="adopciones.php" class="nav-link">Adopciones</a></li>
	        	<li class="nav-item"><a href="donaciones.php" class="nav-link">Donaciones</a></li>
	          <li class="nav-item"><a href="novedades.php" class="nav-link">Novedades</a></li>
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-11 ftco-animate text-center">
          	<p class="balazo">
          		ADOPTA A UN PERRO O GATO
</p>

            
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Adopciones</h2>
          </div>
        </div>
    		<div class="row">
 <?php

          require "config/conexion.php";
$sql = "SELECT * from adopciones where activo=1";
global $conexion;

                            $resultado = $conexion->query($sql);
                            while ($row = mysqli_fetch_object($resultado)) {
                                $idadopcion = $row->idadopcion;
                                $nombre = $row->nombre;
                                $texto = $row->texto;
                                $imagen = $row->imagen;


          echo'
    			<div class="col-md-4 ftco-animate">
	          <div class="block-7">
	          	<p class="nombre">'.$nombre.'</p>
	          	<div class="img" style="background-image: url(images/'.$imagen.');"></div>
	            <div class="p-4">
	            	<span class="textoadopcion">'.$texto.'</span>
	            </div>
	          </div>
	        </div>
	      ';
	  }
	  ?>

	      </div>
    	</div>
    </section>
   

<div class="container">
<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Formulario de Adopción</h3>
										<form method="POST" id="formulario-adopcion" name="formulario-adopcion" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Nombre</label>
														<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Apellidos</label>
														<input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="label" for="subject">Email</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="label" for="subject">Telefono</label>
														<input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" onKeyPress="return soloNumeros(event)">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="label" for="subject">Estoy interesado en:</label>
														 <select name="idanimalito" id="idanimalito" class="form-control selectpicker" data-live-search="true" required> 
                                    						</select>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Mensaje</label>
														<textarea name="mensaje" class="form-control" id="mensaje" cols="30" rows="4" placeholder="Mensaje"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="button" value="Enviar Mensaje" class="btn btn-primary" onclick="verificar_datos()">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
</div>
<br><br>
		

   <?php
include ('footer.php');
   ?>
<script src="scripts/adopciones.js"></script>