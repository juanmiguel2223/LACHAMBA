<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/ticket.css">
    <link rel="shortcut.icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">
    <link rel="icon" type="image/x-icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">
    <title>Document</title>
</head>
<main>
<form>
<?php
define('IMAGENES_DIR', 'http://localhost/WWW.BARBERIA.COM/IMAGENES/');

function validarCita($corte, $correo, $fecha, $hora)
{

    if (!empty($corte) && !empty($correo) && !empty($fecha) && !empty($hora)) {
        
        echo "<h1>Detalles de la Cita</h1>";
        echo "<p>Tipo de Corte: $corte</p>";
        echo "<p>Correo Electrónico: $correo</p>";
        echo "<p>Fecha de la Cita: $fecha</p>";
        echo "<p>Hora de la Cita: $hora</p>";
    } else {
        echo "<h1>Error en la Cita</h1>";
        echo "<p>Debe seleccionar un tipo de corte y proporcionar correo electrónico, fecha y hora válidos.</p>";
    }
}

$corte = isset($_POST['corte']) ? $_POST['corte'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';
$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
$hora = isset($_POST['hora']) ? $_POST['hora'] : '';

validarCita($corte, $correo, $fecha, $hora);
?>
<a href="../index.php" class="dtn">Volver</a>
</form>
</main>
<?php
//Conectando con la BD
    $host ="localhost";
    $user ="root";
    $pass ="12345678";
    $db="barber";  //Nombre de la BD

    //Establece conexión con la base de datos (dominio,usuarios,contraseña,base_de_datos)
    $con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");
    mysqli_select_db($con, $db) or die("Problemas al conectar con la base de datos");

    //Inserta valores a la tabla
    $sql = "INSERT INTO citas  VALUES ('$corte', '$correo', '$fecha', '$hora')";

    //ejecutamos la sentencia de sql
    $ejecutar = mysqli_query($con, $sql);

    //verificamos la ejecucion
    if (!$ejecutar) {
        echo "<mark> Verifica, hubo algún error y no se realizó el registro</mark>";
    } else {
        echo "Su ticket de compra fue enviado a: <b>.$correo.</b>";
        echo "<p> <br>Datos guardados en la base de datos</p> <br>";
    }

?>
<a href="../index.php" class="dtn">Volver</a>
</form>
</main>
</html>

