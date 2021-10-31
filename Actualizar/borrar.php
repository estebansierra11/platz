<?php
include("conexion.php");
if (isset($_POST['borrar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['last']) >= 1) {

	    $name = trim($_POST['name']);
      $last = trim($_POST['last']);
      $codigo = trim($_POST['codigo']);



	    $consulta = "DELETE FROM dato WHERE id='$codigo'";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">DATOS BORRADOS</h3>
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
