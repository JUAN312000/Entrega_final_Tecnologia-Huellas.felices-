   <?php
include ('header.php');
   ?>
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php"> <img src="images/logo.png" class="logo"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
	        	<li class="nav-item"><a href="nosotros.php" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="adopciones.php" class="nav-link">Adopciones</a></li>
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
          	<h1 class="mb-4">CUANDO TU ADOPTAS, TU SALVAS LA VIDA DE UN PERRO/GATO...<br>Y CAMBIAS LA TUYA PARA SIEMPRE. </h1>
            <p><a href="adopciones.php" class="btn btn-primary mr-md-4 py-3 px-4">Click aquí para adoptar <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-veterinarian"></span>
              </div>
               <div class="media-body">
                <h3 class="heading">Nuestra Fundación</h3>
                <p>Esta fundacion fue creada con el fin de poder ayudar a todos los animalitos que se encuentran sin un hogar en la ciudad de Santa Marta o alrededores.</p>
                <a href="nosotros.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Leer Más</i></a>
              </div>
            </div>      
          </div>

          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-blind"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Adopciones</h3>
                <p>Al adoptar ayudas a un perro/gato de la calle a tener una mejor vida.</p>
                <a href="adopciones.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Leer Más</i></a>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-dog-eating"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Donaciones</h3>
                <p>Necesitamos tu ayuda, con un donativo puedes apoyar a los perros y gatos de la calle que más lo necesitan.</p>
                <a href="donaciones.php" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>
<div id="map" class="map"></div>
   <br><br>
    

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Galería</h2>
          </div>
        </div>
				<div class="row">
          
          <?php

          require "config/conexion.php";
$sql = "SELECT * from galeria where activo=1";
global $conexion;

                            $resultado = $conexion->query($sql);
                            while ($row = mysqli_fetch_object($resultado)) {
                                $idgaleria = $row->idgaleria;
                                $texto = $row->texto;
                                $imagen = $row->imagen;


          echo'<div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/'.$imagen.');">
            	<a href="images/'.$imagen.'" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	               <div class="text w-100 mb-3">
	              	
	              	<h2><a href="#">'.$texto.'</a></h2>
	              </div>
              </div>
            </div>
          </div>';
        }
          ?>

        </div>
			</div>
		</section>

   <?php
include ('footer.php');
   ?>