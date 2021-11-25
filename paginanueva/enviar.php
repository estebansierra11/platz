<?php
include("cone.php");
if (isset($_POST['enviar'])) {
if (strlen($_POST['comentario']) >= 1 ) {

	    $comentario = trim($_POST['comentario']);




	    $consulta = "INSERT INTO comentario (comentarioUsuario) VALUES ('$comentario')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?>
        <div class="okr">


	    	<h3 class="ok">Enviado</h3>
          </div>
           <?php
	    } else {
	    	?>
				<div class="badr">

				</div>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
					</div>
           <?php
	    }
    }else {
	    	?>
				<div class="fault">


	    	<h3 class="">¡Por favor complete los campos!</h3>
				</div>
           <?php
    }

}
 ?>
