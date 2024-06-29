<?php
echo '<title>Consultas</title>';
echo '<link rel="icon" type="image/x-icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">';
echo '<link rel="stylesheet" type="text/css" href="../CSS/productos.css" />';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

//CONEXION A BD

//conectamos Con el servidor
$host = "localhost";
$user = "root";
$pass = "12345678";
$db = "barber";

//Establece conexión con la base de datos (dominio, usuarios, contraseña, base_de_datos)
$con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");
mysqli_select_db($con, $db) or die("Problemas al conectar con la base de datos");

$consulta2 = mysqli_query($con, "SELECT * FROM ventas");
if (mysqli_num_rows($consulta2) > 0) {

  echo '<div id="Encabezado"><br>';
  echo '<h1> Tienda </h1><br>';
  echo '</div>';

  echo "<table>";
  echo "<tr><th colspan='2'><h3>CONSULTA COMPRAS</h3></th></tr>";
  echo "<tr><td><strong>Correo del cliente</strong></td><td><strong>Total de la compra</strong></td></tr>";

  while ($registro = mysqli_fetch_array($consulta2)) {
    if ($registro["total"] > 0) {
      echo "<tr>";
      echo "<td>" . $registro["correo"] . "</td>";
      echo "<td>" . $registro["total"] . "</td>";
      echo "</tr>";
    }
  }
  echo "</table>";

  echo '<buton><br><a href="../php/form_modificar.php">Regresar</a></buton><br><br>';
}

mysqli_close($con);
?>
