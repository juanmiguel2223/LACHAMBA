<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> Formulario</title>
  <link rel="stylesheet" type="text/css" href="../CSS/productos.css" />
  <link rel="shortcut.icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">
    <link rel="icon" type="image/x-icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">

</head>

<body>
  <div id="Encabezado"><br>
    <h1> BARBERIA LA CHAMBA </h1><br>
  </div>
  <div id="Section"><br><br>

    <h1> Consulta de registros </h1><br>
    <p> Escribe el correo para consultar la compra</p>

    <form action="../php/eliminar.php" method="POST" align="center" class="box">

      <p><b>Escribe el correo </b></p><br>
      <input type="text" name="correo" placeholder="Escribe el correo a eliminar" maxlength="80" />
      <input type="submit" name="Eliminar" value="Borrar" data-toggle="modal"><br><br>

      <button><a href='../HTML/Productos_cabello.html'> Regresa al formulario </a></button>
    </form>
  </div>
  <div id="Footer"><br>
    <h5 style="color:#ff9100">Juan Diego Paez Lazarin, Edgar Miguel Rivera Amaro</h5> <br>
  </div>

  <?php

  if ($_POST) {  //verificando el envío del formulario mediante El envío tipo submit por metodo POST
    //Conectando con la BD
    $host = "localhost";
    $user = "root";
    $pass = "12345678";
    $db = "barber";  //Nombre de la BD

    //Establece conexión con la base de datos (dominio,usuarios,contraseña,base_de_datos)
    $con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");
    mysqli_select_db($con, $db) or die("problemas al conectar con la base de datos");

    $correo = $_POST['correo'];

    //Conexión con el registro de la tabla de la Base de Datos  
    mysqli_query($con, "DELETE FROM ventas WHERE correo='$correo'") or die("Error al eliminar los datos");
    mysqli_close($con);
    
    echo "<p> Datos eliminados correctamente </p>";
  }

  ?>
</body>

</html>