<?php

include("conexion.php");
if (isset($_POST['actualizar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['last']) >= 1) {

	    $name = trim($_POST['name']);
      $last = trim($_POST['last']);
      $codigo = trim($_POST['codigo']);



	    $consulta = "INSERT INTO dato (nombre,apellido) VALUES ('$name', '$last')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">DATOS REGISTRADOS</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['last']) >= 1) {

	    $name = trim($_POST['name']);
      $last = trim($_POST['last']);
      $codigo = trim($_POST['codigo']);



	    $consulta = "UPDATE dato SET nombre= '$name', apellido='$last' WHERE id= '$codigo'";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">DATOS ACTUALIZADOS</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
