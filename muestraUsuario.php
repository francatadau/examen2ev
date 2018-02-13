<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Envio info</title>
  </head>
  <body>
    <a href="http://localhost/prog/segundaeva/examen/muestraUsuario.php?id=">Dime un id</a><br><br>
<?php
//conector
$conector = new mysqli("localhost", "root", "", "juegos");
if ($conector->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $conector->connect_error;
}else {
  //recogemos por metodo GET el id que hemos puesto en el link
  echo "<b>El id recibido es:</b> ".$_GET["id"]."<br><br>";

//En la consulta buscamos por id
$resultado = $conector->query("SELECT * FROM usuarios WHERE id='".$_GET['id']."'");
    foreach ($resultado as $fila) {
      echo "<b>Nombre:</b> ".$fila["nombre"]."<br><br>";
      echo "<b>Apellidos:</b> ".$fila["apellidos"]."<br><br>";
      echo "<b>Edad:</b> ".$fila["edad"]."<br><br>";
      echo "<b>Curso:</b> ".$fila["curso"]."<br><br>";
      echo "<b>Puntuacion:</b> ".$fila["puntuacion"]."<br><br>";
      echo "<b>Correo:</b> ".$fila["correo"]."<br><br>";

    }
  }


?>
  </body>
</html>
