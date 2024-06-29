<?php
session_start();
unset($_SESSION["numero_acceso"]);
?>

<!DOCTYPE html>
<html lang="es">
<link rel="shortcut.icon" href="../IMAGENES/logo1.1.ico">
<link rel="icon" type="image/x-icon" href="../IMAGENES/logo1.1.ico">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar sesión</title>
    <link rel="stylesheet" href="../CSS/eliminarsesion.css"> <!-- Asegúrate de ajustar la ruta según la ubicación de tu archivo CSS -->
</head>

<body>
    <div class="container">
        <p>Reseteando contador de sesiones</p>
        <br><br><br>
        <a href="../INDEX.php">Volver</a>
    </div>
</body>

</html>
