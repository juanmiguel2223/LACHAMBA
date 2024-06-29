<?php

echo '<title> Ordenar Pedido </title>';
echo '<link rel="icon" href="../imagenes/quesadillas.ico">';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';

//Conectando con la BD
$host ="localhost";
$user ="root";
$pass ="12345678";
$db="barber";  //Nombre de la BD


$con = mysqli_connect($host, $user, $pass, $db);


if (!$con)
{
    die("La conexion ha fallado: " . mysqli_connect_error());
}

echo "Conexión existosa <br/> <br/>";
$correo = $_POST['correo'];
$name = $_POST['name'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];



$sql = "INSERT INTO usuarios VALUES ( '$correo', '$name','$password', '$telefono')";

if (mysqli_query($con, $sql))
{
    echo "El registro del pedido se realizo con éxito";
}else{
    echo "Error: " . $sql . "<br/>" . mysqli_error($con);
}
mysqli_close($con);


echo '<br/><br/><a href="../HTML/formulario2.html"> Regresar </a>';
                    
?>