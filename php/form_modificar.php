<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title> Actualizaciones </title>
  <link rel="stylesheet" type="text/css" href="../CSS/productos.css">
  <link rel="shortcut.icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">
    <link rel="icon" type="image/x-icon" href="http://localhost/WWW.BARBERIALACHAMBA.COM/IMAGENES/logo1.1.jpg">
</head>

<body>

  <div id="Encabezado"><br>
    <h1> Tienda </h1><br>
    <h2> Modificar compra </h2><br>
  </div>

  <div id="Section"><br>
 

    <form action="../php/modificar.php" method="POST" align="center" class="box">
      <p>Login:</p>
      <table>
                <tr>
                    <td>
                        <h2>Cera para peinar Aqua Net $55</h2><br><img src="../IMAGENES/cera.jpg" alt="">
                        <input type="number" name="aqua_net" value="0" min="0">
                    </td>
                    <td>
                        <h2>Cera Gorilla $70</h2><img src="../IMAGENES/gorillacera.jpg" alt="">
                        <input type="number" name="gorilla" value="0" min="0">
                    </td>
                    <td>
                        <h2>Cera Barracuda $90</h2><img src="../IMAGENES/barracudacera.jpg" alt="">
                        <input type="number" name="barracuda" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Cera Lobo negro $90</h2><img src="../IMAGENES/ceralobonegro.jpg" alt="">
                        <input type="number" name="lobo_negro" value="0" min="0">
                    </td>
                    <td>
                        <h2>Gel EGO $60</h2><br><img src="../IMAGENES/gel.jpg" alt="">
                        <input type="number" name="ego" value="0" min="0">
                    </td>
                    <td>
                        <h2>Gel Extreme $75</h2><br><img src="../IMAGENES/gelextreme.jpg" alt="">
                        <input type="number" name="extreme" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Gel Kuul $90</h2><br><img src="../IMAGENES/gelkuul.jpg" alt="">
                        <input type="number" name="kuul" value="0" min="0">
                    </td>
                    <td>
                        <h2>Gel barracuda $95</h2><br><img src="../IMAGENES/gelbarracuda.webp" alt="">
                        <input type="number" name="gel_barracuda" value="0" min="0">
                    </td>
                    <td>
                        <h2>Espuma para afeitar Shaving $255</h2><br><img src="../IMAGENES/gel para afeitar.jpg" alt="">
                        <input type="number" name="shaving" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Espuma para afeitar Gillette $100</h2><br><img src="../IMAGENES/espgillette.jpg" alt="">
                        <input type="number" name="gillette" value="0" min="0">
                    </td>
                    <td>
                        <h2>Espuma para afeitar Nivea Men $200</h2><br><img src="../IMAGENES/espumanivea.jpg" alt="">
                        <input type="number" name="nivea" value="0" min="0">
                    </td>
                    <td>
                        <h2>Espuma para afeitar Equate $150</h2><br><img src="../IMAGENES/espumaequate.webp" alt="">
                        <input type="number" name="equate" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Bálsamo para Barba King C. Gillette $233</h2><br><img src="../IMAGENES/balsamo.jpg" alt="">
                        <input type="number" name="king_gillette" value="0" min="0">
                    </td>
                    <td>
                        <h2>Bálsamo para Barba lobo negro $200</h2><br><img src="../IMAGENES/balsamolobonegro.webp" alt="">
                        <input type="number" name="balsamo_lobo_negro" value="0" min="0">
                    </td>
                    <td>
                        <h2>Bálsamo para Barba Barracuda $120</h2><br><img src="../IMAGENES/balsamobarracuda.webp" alt="">
                        <input type="number" name="balsamo_barracuda" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Bálsamo para Barba OMstyle $290</h2><br><img src="../IMAGENES/balsamoomstyle.webp" alt="">
                        <input type="number" name="omstyle" value="0" min="0">
                    </td>
                    <td>
                        <h2>Shampoo dove $330</h2><br><img src="../IMAGENES/shampoodove.webp" alt="">
                        <input type="number" name="dove" value="0" min="0">
                    </td>
                    <td>
                        <h2>Shampoo nivea $260</h2><br><img src="../IMAGENES/shampooniveamen.jpg" alt="">
                        <input type="number" name="nivea_shampoo" value="0" min="0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>Shampoo Pure Viking $240</h2><br><img src="../IMAGENES/shampo.jpg" alt="">
                        <input type="number" name="pure_viking" value="0" min="0">
                    </td>
                    <td>
                        <h2>Shampoo olds pice $300</h2><br><img src="../IMAGENES/shampoooldspice.jpg" alt="">
                        <input type="number" name="old_spice" value="0" min="0">
                    </td>
                    <td>
                        <h2>kit para afeitar Grow Alpha Beard $300</h2><br><img src="../IMAGENES/gel para afeitar.jpg" alt="">
                        <input type="number" name="grow_alpha_beard" value="0" min="0">
                    </td>
                </tr>
            </table>
            <label class="cita" for="email">Correo electrónico:</label>
            <input class="cita" type="email" name="correo" id="correo" required maxlength="80"><br><br>

      <br><br><button> <input type="submit" value="Actualizar registro" name="Actualizar"></button>
      <button><a href="../HTML/Productos_cabello.html">Regresar al formulario </a></button>
    </form>

    <div id="Footer"><br>
      <h5 style="color:#ff9100"> Juan Diego Paez Lazarin, Edgar Miguel Rivera Amaro</h5> <br>
    </div>
</body>

</html>