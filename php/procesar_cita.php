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
<form method="POST">
<?php
echo "<h1>Ticket de compra</h1>";
define('IMAGENES_DIR', 'http://localhost/WWW.BARBERIA.COM/IMAGENES/');
define('PRECIO_AQUA_NET', 55);
define('PRECIO_GORILLA', 70);
define('PRECIO_BARRACUDA', 90);
define('PRECIO_LOBO_NEGRO', 90);
define('PRECIO_EGO', 60);
define('PRECIO_EXTREME', 75);
define('PRECIO_KUUL', 90);
define('PRECIO_GEL_BARRACUDA', 95);
define('PRECIO_SHAVING', 255);
define('PRECIO_GILLETTE', 100);
define('PRECIO_NIVEA', 200);
define('PRECIO_EQUATE', 150);
define('PRECIO_KING_GILLETTE', 233);
define('PRECIO_BALSAMO_LOBO_NEGRO', 200);
define('PRECIO_BALSAMO_BARRACUDA', 120);
define('PRECIO_OMSTYLE', 290);
define('PRECIO_DOVE', 330);
define('PRECIO_NIVEA_SHAMPOO', 260);
define('PRECIO_PURE_VIKING', 240);
define('PRECIO_OLD_SPICE', 300);
define('PRECIO_GROW_ALPHA_BEARD', 300);

function calcularSubtotal($cantidad, $precio)
{
    return $cantidad * $precio;
}

function procesarCompra($productos)
{
    $total = 0;
    foreach ($productos as $producto => $cantidad) {
        if ($cantidad > 0) {
            echo "<table>";
            echo "<tr>";
            $subtotal = calcularSubtotal($cantidad, constant('PRECIO_' . strtoupper($producto)));
            echo "<td><p>Producto: $producto</td> <td> Cantidad: $cantidad</td> <td> Subtotal: $subtotal</td><br></p>";
    
            $total += $subtotal;
        }
    }

    echo "<tr>";
    echo "<td><h2>Total de la compra: $total</h2></td></p>";
    echo "</tr>";
    echo "</table>";

    return $total;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productos = [
        'aqua_net' => $_POST['aqua_net'],
        'gorilla' => $_POST['gorilla'],
        'barracuda' => $_POST['barracuda'],
        'lobo_negro' => $_POST['lobo_negro'],
        'ego' => $_POST['ego'],
        'extreme' => $_POST['extreme'],
        'kuul' => $_POST['kuul'],
        'gel_barracuda' => $_POST['gel_barracuda'],
        'shaving' => $_POST['shaving'],
        'gillette' => $_POST['gillette'],
        'nivea' => $_POST['nivea'],
        'equate' => $_POST['equate'],
        'king_gillette' => $_POST['king_gillette'],
        'balsamo_lobo_negro' => $_POST['balsamo_lobo_negro'],
        'balsamo_barracuda' => $_POST['balsamo_barracuda'],
        'omstyle' => $_POST['omstyle'],
        'dove' => $_POST['dove'],
        'nivea_shampoo' => $_POST['nivea_shampoo'],
        'pure_viking' => $_POST['pure_viking'],
        'old_spice' => $_POST['old_spice'],
        'grow_alpha_beard' => $_POST['grow_alpha_beard']
    ];

    $correo = $_POST['correo'];
    $total = procesarCompra($productos);

    //Conectando con la BD
    $host ="localhost";
    $user ="root";
    $pass ="12345678";
    $db="barber";  //Nombre de la BD

    //Establece conexión con la base de datos (dominio,usuarios,contraseña,base_de_datos)
    $con = mysqli_connect($host, $user, $pass, $db) or die("Problemas al Conectar");
    mysqli_select_db($con, $db) or die("Problemas al conectar con la base de datos");

    //Inserta valores a la tabla
    $sql = "INSERT INTO ventas (correo, total) VALUES ('$correo', '$total')";

    //ejecutamos la sentencia de sql
    $ejecutar = mysqli_query($con, $sql);

    //verificamos la ejecucion
    if (!$ejecutar) {
        echo "<mark> Verifica, hubo algún error y no se realizó el registro</mark>";
    } else {
        echo "Su ticket de compra fue enviado a: <b>.$correo.</b>";
        echo "<h2> El total de su compra es: $ " .$total.  " pesos</h2>";
        echo "<p> <br>Datos guardados en la base de datos</p> <br>";
    }
}
?>
<a href="../HTML/Productos_cabello.html" class="dtn">Volver</a>
</form>
</main>
</html>
