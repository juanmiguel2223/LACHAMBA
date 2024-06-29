<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut.icon" href="../IMAGENES/favicon.ico">
        <link rel="icon" type="img/x-icon" href="../IMAGENES/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/guar.css">
</head>
<header>
<h2 id="inicio">FORMULARIO RESPUESTAS</h2>
</header><!--contiene encabesados logotipos o formulario de busqueda-->
<main>

<?php

$name =$_POST["name"];
$correo =$_POST["correo"];
$password =$_POST["password"];
$telefono =$_POST["telefono"];

echo "El nombre es:  ".$name. "<br>";
echo "El email es:  ".$correo. "<br>";
echo "La contraseña es:  ".$password. "<br>";
echo "El telefono es:  ".$telefono. "<br>";

?>
</main>
<footer>Edgar Miguel Rivera Amaro, Juan Diego Paez Lazarin</footer>
