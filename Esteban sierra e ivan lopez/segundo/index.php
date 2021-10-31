<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <h1 style="text-align:center ;">Ministerio de Educacion</h1>
  </head>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="row mb-3">
        <h1 for="edad" class="col-sm-2 col-form-label">Edad:</h1>
        <div class="col-sm-8">
          <input type="number" class="form-control" name="edad" id="edad">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col text-center">
          <button type="submit" name="pedido" class="btn btn-primary">Enviar</button>
        </div>
      </div>
      <div class="col text-center">

      </div>


<?php
require "borrador.php";



if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $edad = $_POST['edad'];
   $factory= new PersonaFactory();
   $persona= $factory->createPersona($edad);



     echo $persona->getDescripcion();
     echo $persona->imprimirformulario();


}
 ?>







</form>
  </body>
</html>
