<?php
echo '<link rel="stylesheet" type="text/css" href="../CSS/productos.css"/>';
echo '<link rel="icon" href="../logo.ico">';

//Conectando con la BD
$host ="localhost";
$user ="root";
$pass ="12345678";
$db="barber";  //Nombre de la BD

$conexion = mysqli_connect($host, $user, $pass, $db) or die ("Error en la conexion");

 //Define variables
$correo =$_POST ['correo'];
$total =$_POST["total"]; 
$aqua_net =$_POST['aqua_net'];
$gorilla =$_POST['gorilla'];
$barracuda =$_POST['barracuda'];
$lobo_negro =$_POST['lobo_negro'];
$ego =$_POST['ego'];
$extreme =$_POST['extreme'];
$kuul =$_POST['kuul'];
$gel_barracuda =$_POST['gel_barracuda'];
$shaving =$_POST['shaving'];
$gillette =$_POST['gillette'];
$nivea =$_POST['nivea'];
$equate =$_POST['equate'];
$king_gillette  =$_POST['king_gillette'];
$balsamo_lobo_negro  =$_POST['balsamo_lobo_negro'];
$balsamo_barracuda  =$_POST['balsamo_barracuda'];
$omstyle  =$_POST['omstyle'];
$dove  =$_POST['dove'];
$nivea_shampoo  =$_POST['nivea_shampoo'];
$pure_viking  =$_POST['pure_viking'];
$old_spice  =$_POST['old_spice'];
$grow_alpha_beard  =$_POST['grow_alpha_beard'];


mysqli_query ($conexion, "UPDATE ventas set aqua_net='$aqua_net', gorilla='$gorilla', barracuda='$barracuda',
lobo_negro='$lobo_negro', ego='$ego', extreme='$extreme',kuul='$kuul', gel_barracuda='$gel_barracuda', shaving='$shaving',
gillette='$gillette', nivea='$nivea', equate='$equate', king_gillette='$king_gillette', balsamo_lobo_negro='$balsamo_lobo_negro', balsamo_barracuda='$balsamo_barracuda',
omstyle='$omstyle', dove='$dove', nivea_shampoo='$nivea_shampoo',pure_viking='$pure_viking', old_spice='$old_spice', grow_alpha_beard='$grow_alpha_beard',
          WHERE correo='$correo'")
         or die ("Error al eliminar los datos");
mysqli_close($conexion);
echo "Actualización exitosa. <br>";
echo "Si desea hacer otra actualización, regrese al formulario de actualizaciones.<br>";
?>


<?php
//CONEXION A BD
$conexion = mysqli_connect("localhost","root","1234567","barber") or die (mysqli_error());

$consulta2=mysqli_query($conexion, "SELECT * FROM ventas");
if (mysqli_num_rows($consulta2)>0) {

		echo "<table border=1 align=center>";
		 echo "<tr><th colspan= 5> <h3> Actualiza compra </h3></th></tr>";
				    echo "<td> Correo del cliente </td> 
                            <td>Cantidad de Aqua Net comprados</td> 
						    <td> Cantidad de Gorilla comprados</td>
							<td>Cantidad de Barracuda</td> 
						    <td> Cantidad de Lobo negro comprados</td>
							<td>Cantidad de EGO comprados</td> 
						    <td> Cantidad de Extreme comprados</td>
							<td>Cantidad de Kuul comprados</td> 
						    <td> Cantidad de barracuda comprados</td>
							<td>Cantidad de Espuma afeitar Shaving comprados</td> 
						    <td> Cantidad de Espuma afeitar Gillette comprados</td>
							<td>Cantidad de Nivea Men comprados</td> 
						    <td> Cantidad de Equate comprados</td>
							<td>Cantidad de King C comprados</td> 
						    <td>Cantidad de Bálsamo Barba lobo negro comprados</td>
							<td>Cantidad de Bálsamo Barba Barracuda comprados</td> 
						    <td> Cantidad de Bálsamo para Barba OMstyle comprados</td>
							<td>Cantidad de Shampoo dove comprados</td> 
						    <td> Cantidad de Shampoo nivea comprados</td>
							<td>Cantidad de Shampoo Pure Viking comprados</td> 
						    <td> Cantidad de Shampoo olds pice comprados</td>
							<td>Cantidad de kit para afeitar Grow Alpha Beard comprados</td>";

		while ($registro = mysqli_fetch_array($consulta2)){  //mysqli_fetch_array-- Obtiene una fila de resultados como un array asociativo, numérico, o ambos

			if ($registro["correo" ] >=0) {

				 echo "<tr>";
                    echo "<td style=background-color:#556EE6 >".$registro["correo"]."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro["pc"]."</td>";
					echo "<td style=background-color:#556EE6 >".$registro["dd"]."</td>";
					echo "<td style=background-color:#556EE6 >".$registro["bocina"]."</td>";
					echo "<td style=background-color:#556EE6 >".$registro["correo"]."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro["pc"]."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro["dd"]."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro["bocina"]."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['aqua_net']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['gorilla']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['barracuda']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['lobo_negro']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['ego']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['extreme']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['kuul']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['gel_barracuda']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['shaving']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['gillette']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['nivea']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['equate']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['king_gillette']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['balsamo_lobo_negro']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['balsamo_barracuda']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['omstyle']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['dove']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['nivea_shampoo']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['pure_viking']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['old_spice']."</td>";
                    echo "<td style=background-color:#556EE6 >".$registro['grow_alpha_beard']."</td>"; 
                    echo "<td style=background-color:#556EE6 >".$registro["total"]."</td>";
                   
              
                   
			}
		}
	}

    echo '<br><button><a href="Productos_cabello.html"> Regresar </a></button>';
?>

