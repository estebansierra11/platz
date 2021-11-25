<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="pruebita.css">
    <title></title>
  </head>
  <body>
    <div class="ventana" id="vent">
      <div class="" id="cerrar"> <a href="javascript:cerrar()"><img src="img/cerrar2.png" alt=""></a>

      </div>
      Bienvenidos
    </div>
    <nav>

    </nav>
    <section id="contenedor-vent">
<a href="javascript: abrir()">Abrir ventana</a>
    </section>
<script>
function abrir(){
  document.getElementById('vent').style.display="block";
}
function cerrar(){
  document.getElementById('vent').style.display="none";
}


</script>
  </body>
</html>
