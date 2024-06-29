<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/info.css">
    <link rel="shortcut.icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">
    <link rel="icon" type="image/x-icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">
    <title>Información del Formulario</title>
</head>
<body>
    <div class="FORM-cont">
        <h2>Información Recibida</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $correo = htmlspecialchars($_GET['correo']);
            $name = htmlspecialchars($_GET['name']);
        
            $password = htmlspecialchars($_GET['password']);
            $telefono = htmlspecialchars($_GET['telefono']);
            
            echo "<p><strong>Nombre:</strong> $name</p>";
            echo "<p><strong>Correo:</strong> $correo</p>";
            echo "<p><strong>Contraseña:</strong> $password</p>";
            echo "<p><strong>Teléfono:</strong> $telefono</p>";
        } else {
            echo "<p>Método de solicitud no soportado.</p>";
        }
        ?>
        <a href="../index.php" class="dtn">Volver</a>
    </div>
</body>
</html>
