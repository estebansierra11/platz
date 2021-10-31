<!DOCTYPE html>
<html>
<head>
	<title>ACTUALIZAR DATOS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="act.css">
</head>
<body>

    <form method="post">
    	<h1>Actualice datos con el codigo</h1>
			<input type="number" name="codigo" placeholder="id">
    	<input type="text" name="name" placeholder="Nuevo nombre">
    	<input type="text" name="last" placeholder="Nuevo apellido">
     <input type="submit" name="register" value="Actualizar">
		 	<input type="submit" name="actualizar" value="Agrega">
      <input type="submit" name="borrar" value="Borrar">



    </form>

        <?php
        include("registrar.php");
				include("borrar.php");
        ?>
</body>
</html>
