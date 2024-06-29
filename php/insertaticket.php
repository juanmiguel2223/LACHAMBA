<?php
echo '<link rel="stylesheet" type="text/css" href="../css/estiloticket.css"/>';
echo '<link rel="icon" href="../logo.ico">';

$correo =$_POST ['correo'];
$pc =$_POST ['pc'];  //Define variables
$dd =$_POST['dd'];
$bocina =$_POST['bocina'];

//Define constantes
define ("preciopc","9000");
define ("preciodd","900");
define ("preciobocina","1090");

//Operaciones básicas para calcular totales
$totalpc=$pc * preciopc; //si
$totaldd=$dd*preciodd;
$totalbocina=$bocina*preciobocina;
$acum=0;

//Formato de tabla de los conceptos

echo "<table>";
echo "<u><h3> TICKET DE COMPRA </h3></u>";

echo "<tr>";
echo "<th> Cantidad</th>";
echo "<th> Descripción</th>";
echo "<th> Precio</th>";
echo "<th> Total</th>";
echo "</tr>";
echo "<tr>";

if($pc > 0)    //Calculando totales 
 {
  echo "<td>".$pc."</td>";
  echo "<td> PC Desktop todo en uno iMac Core i5 </td>";
  echo "<td> $" .preciopc. "</td>";
  echo "<td> $" .$totalpc. "</td>";
  $acum=$acum+$totalpc;
 }
  echo "</tr>";
  echo "<tr>"; 
  

  if($dd > 0)
  {
   echo "<td>".$dd."</td>";
   echo "<td> Discos duros </td>";
   echo "<td> $" .preciodd. "</td>";
   echo "<td> $" .$totaldd. "</td>";
   $acum=$acum+$totaldd;
  }
  echo "</tr>";
  echo "<tr>"; 

  if($bocina > 0)
  {
    echo "<td>".$bocina."</td>";
    echo "<td> Bocina inteligente Alexa </td>";
    echo "<td> $" .preciobocina. "</td>";
    echo "<td> $" .$totalbocina. "</td>";
   $acum=$acum+$totalbocina;
  }
  echo "</tr>";
  echo "<tr>"; 

  echo "</table>";
 

?> 

  
<?php   
//Conectando con la BD
$host ="localhost";
$user ="root";
$pass ="";
$db="aplicacionweb";  //Nombre de la BD


//Establece conexión con la base de datos (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

//Define variables
$correo =$_POST['correo'];
$pc =$_POST ['pc'];  
$dd =$_POST['dd'];
$bocina =$_POST['bocina'];

//Inserta valores a la tabla
$sql = "INSERT INTO ventas VALUES 
      ('$correo','$pc','$dd','$bocina','$totalpc','$totaldd','$totalbocina','$acum')";

//ejecutamos la sentencia de sql
$ejecutar=mysqli_query($con,$sql);

//verificamos la ejecucion
if(!$ejecutar){
    echo "<mark> Verifica, hubo algún error y no se realizó el registro</mark>";
   }else{
    echo "Su ticket de compra fue enviado a: <b> $correo </b>";
    
  echo "<h2> El total de su compra es: $ " .$acum.  " pesos</h2>";
    echo "<p> <br>Datos guardados en la base de datos  </p> <br>";
   }
  
echo "<br><br><a href='../php/venta.php'>Realizar otro pedido</a><br>";

?>


