<!DOCTYPE html>
<html lang="en">
	<head>
    <h1 style="text-align:center">BRASA LOCA</h1>
		<title>Brasa Loca</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilopar.css">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="http://localhost/parcial1/restaurante.php#">Inicio</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http:///localhost/parcial1/menu.php">Menu <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nosotros</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class="contenedor">
    <div class="item1"></div>
      <div class="item2"></div>
        <div class="item3"></div>
          <div class="item4"></div>

          </div>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="https://png.pngtree.com/thumb_back/fw800/back_our/20190621/ourmid/pngtree-thickened-big-burger-promotion-simple-banner-image_196612.jpg" alt="First slide">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="https://laantojadera.com/media/banner/d9a4ac_513_Salchipapas.jpg " alt="Second slide" height="498">
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="https://d167y3o4ydtmfg.cloudfront.net/367/studio/assets/v1543218987449_1510324884/Home_Hot_Dogs_1280x500.jpg" alt="Third slide" height="498">
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
	</head>
	<body>
    <?php

    $costo = 0;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         $direccion = $_POST['direccion'];
         $nombre = $_POST['nombre'];
         $telefono = $_POST['telefono'];
         $corrientazo = $_POST['corriente'];
         $sopa = $_POST['csopa'];
         $jugo = $_POST['cjugo'];
         $gaseosa = $_POST['cgaseosa'];
         $helado = $_POST['chelado'];
         $ccorriente = $_POST['ccorriente'];

         if($ccorriente > 0){
               if($corrientazo == "Clásica"){
                  $costo = 13000 * $ccorriente;
            }else if($corrientazo == "Doble"){
                  $costo = 18000 * $ccorriente;}else{
               $costo = 15000 * $ccorriente;
            }
          }

         if($sopa > 0){
            $costo += 10000 * $sopa;
          }
            if($jugo > 0){
              $costo += 2000 * $jugo;
            }
            if($gaseosa > 0){
              $costo += 3000 * $gaseosa;
            }
            if($helado > 0){
              $costo += 8000 * $helado;
            }
    }
     ?>
		<h1 class="text-center">Menú Restaurante</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <h1 for="nombre" class="col-sm-2 col-form-label">Nombre:</h1>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
  </div>

  <div class="row mb-3">
  	<h1 for="direccion" class="col-sm-2 col-form-label">Dirección:</h1>
  	<div class="col-sm-8">
	   <input type="text" class="form-control" name="direccion" id="direccion">
    </div>
  </div>

  <div class="row mb-3">
    <h1 for="telefono" class="col-sm-2 col-form-label">Telefono:</h1>
    <div class="col-sm-8">
     <input type="text" class="form-control" name="telefono" id="telefono">
    </div>
  </div>

<div class="row mb-3">
    <h1 for="corriente" class="col-sm-2 col-form-label">Combo Hamburguesa:</h1>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="ccorriente" min="1" id="ccorriente">
    </div>
    <div class="col-sm-4">
      <select class="form-select" name="corriente" id="corriente">
      <option>Clásica</option>
      <option>Doble</option>

    </select>
    </div>
  </div>

    <div class="row mb-3">
  	<h1 for="sopa" class="col-sm-2 col-form-label">Combo Perro Caliente:</h1>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="csopa" min="1" id="csopa">
    </div>
  	<div class="col-sm-4">
  		<select class="form-select" name="sopa" id="sopa">
			<option>(Papas y gaseosa)</option>


		</select>
  	</div>
  </div>

  <div class="row mb-3">
    <h1 for="jugo" class="col-sm-2 col-form-label">Pizza (Porción):</h1>
    <div class="col-sm-1">
      <input type="number" class="form-control" name="cjugo" min="1" id="cjugo">
    </div>
    <div class="col-sm-4">
      <select class="form-select" name="jugo" id="jugo">
      <option>Jamón</option>
      <option>Hawaiana</option>
      <option>Pepperoni</option>
    </select>
    </div>
    <div class="col-sm-3">

    </div>
  </div>

  <div class="row mb-3">
    <h1 for="gaseosa" class="col-sm-2 col-form-label">Gaseosa:</h1>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="cgaseosa" min="1" id="cgaseosa">
    </div>
    <div class="col-sm-4">
      <select class="form-select" name="gaseosa" id="gaseosa">
      <option>Manzana</option>
      <option>Sprite</option>
      <option>Coca-Cola</option>
    </select>
    </div>
  </div>
 <div class="row mb-3">
    <h1 for="helado" class="col-sm-2 col-form-label">Malteada:</h1>
    <div class="col-sm-4">
      <input type="number" class="form-control" name="chelado" min="1" id="chelado">
    </div>
    <div class="col-sm-4">
      <select class="form-select" name="helado" id="helado">
      <option>Sabor Vainilla</option>
      <option>Sabor Chocolate</option>
      <option>Sabor Fresa</option>
    </select>
    </div>
  </div>
  <div class="row mb-3">
  	<div class="col text-center">
  		<button type="submit" name="pedido" class="btn btn-primary">Hacer Pedido</button>
  	</div>
  </div>
  <br>

  <div class="col text-center">
  	<label class="col-sm-8 col-form-label"><?php
  	if($costo > 0){
  	 echo "El costo de su pedido es de $" . $costo. " mil pesos";
  	}
  	 ?></label>
  </div>

</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
