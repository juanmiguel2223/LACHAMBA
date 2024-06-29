<?php
session_start();
if (isset($_SESSION["numero_acceso"])) //Verifica si existe la variable session
{
$_SESSION["numero_acceso"]++;
}
else
{
$_SESSION["numero_acceso"] = 0;
}
?>
<?php
$numero = $_SESSION["numero_acceso"];
if ( $numero> 0)
{
print "<p> Haz accedido esta pagina <b> $numero </b> veces</p>";
}
else
{
print "<p> Hola esta es tu primera visita.</p>";
}
?>
<DOCTYPE html><br><br>
<html lang="es">
<head>
<link rel="shortcut.icon" href="../IMAGENES/logo1.1.ico">
<link rel="icon" type="image/x-icon" href="../IMAGENES/logo1.1.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbería La Chamba</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <script src="./js/biembenida.js"></script>
</head>
<body>
    <header class="header">
        <div class="menu content">
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="" class="menu-icono" alt="Icono de menú">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="./HTML/cortes.html">Cortes</a></li>
                    <li><a href="./HTML/Productos_cabello.html">Productos</a></li>
                    <li><a href="./HTML/listasanidadas.html">Uso de los productos</a></li>
                    <li><a href="./HTML/nosotros.html">Nosotros</a></li>
                    <li><a href="./HTML/formulario2.html">Registrarse</a></li>
                </ul>
            </nav>
            <img src="./IMAGENES/logo1.1.jpg" width="80px" height="80px">
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Barbería La Chamba</h1>
                <span>Servicio para Caballeros</span>
                <p>
                En la Barbería "LA CHAMBA", nos enorgullece proporcionar servicios de cuidado personal excepcionales, desde cortes de cabello de alta calidad hasta afeitados meticulosos. Nuestro equipo de barberos expertos se dedica a ayudarte a lucir y sentirte lo mejor posible, ofreciendo una amplia gama de opciones de estilo adaptadas a tu personalidad y estilo de vida. Además, garantizamos una atención meticulosa a los detalles en nuestros servicios de afeitado clásicos, brindándote una sensación de frescura y confianza en cada visita.
                </p>
            </div>
            <div class="header-dir">
                <div class="dir">
                    <h3>Dirección</h3>
                    <p>Av General</p>
                    <p> Marcelino Garciá Barragan,</p>
                    <p>Azteca,62588 Temixco, Mor.</p>
                </div>
                <div class="dir">
                    <h3>Horario</h3>
                    <p>4:30 - 9:30</p>
                </div>
                <div class="dir">
                    <h3>Teléfono</h3>
                    <p>+52 55 6213 8606</p>
                </div>
            </div>
        </div>
    </header>
    <section class="welcom">
        <div class="welcom-1"></div>
    </div>
        <div class="welcom-2">
            <h2>Bienvenidos a la Barbería La Chamba</h2>
            <p>
            En "LA CHAMBA", también te ofrecemos productos de cuidado personal de primera calidad para que mantengas tu estilo en casa. Desde pomadas y ceras para el cabello hasta aceites y bálsamos para la barba, tenemos todo lo que necesitas para realzar tu apariencia. Estamos comprometidos a proporcionarte una experiencia de cuidado personal de primera clase que te haga sentir como un caballero en todo momento.
            </p>
    </section>
    <main class="services container">
        <div class="services-txt">
            <h2>Nuestros servicios</h2>
        
            <p class="contactanos">Contamos con: </p>
        </div>
        <div class="servicesgroup">
            <div class="services-1">
            <img src="./IMAGENES/tiijeras.jpg" width="200px" height="200px" alt="Cortes de cabello">
            <p>Cortes de cabello</p>
            </div>
            <div class="services-1">
            <img src="./IMAGENES/navaja.jpg" width="200px" height="200px" alt="Arreglos de barba" >
            <p>Afeitado y arreglo de barba</p>
            </div>
            <div class="services-1">
            <img src="./IMAGENES/productos.jpg" width="200px" height="200px" alt="Ventas de productos" >
            <p>Ventas de Productos</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-bg">
            <div class="alfonso">
            <h2>Reserva una cita</h2>
            <button><a href="./HTML/cortes.html">Reserva</a></button><br>
            <h2>Contáctanos</h2>
            <button><a href="https://api.whatsapp.com/send/?phone=525562138606&text&type=phone_number&app_absent=0">WhatsApp</a></button><br>
            <button><a href="PHP/eliminasesion.php">Eliminar visitas </a></button>
            </div><br>
            <h4>Edgar Miguel Rivera Amaro Juan Diego Paez Lazarin</h4>
        </div>
    </footer>
</body>
</html>
