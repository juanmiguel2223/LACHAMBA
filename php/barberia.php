<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['schedule'])) {
        $_SESSION['haircut'] = $_POST['haircut'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['date'] = $_POST['date'];
        $_SESSION['time'] = $_POST['time'];
    } elseif (isset($_POST['buy'])) {
        foreach ($_POST['products'] as $key => $product) {
            if (!empty($product['quantity'])) {
                $item = [
                    'name' => $product['name'],
                    'quantity' => $product['quantity'],
                    'image' => $product['image'],
                    'description' => $product['description'],
                    'email' => $_POST['email']
                ];
                $_SESSION['products'][] = $item;
            }
        }
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicio de Peluquería</title>
    <link rel="stylesheet" href="http://localhost/WWW.BARBERIA.COM/CSS/barberia.css">
</head>
<body>
    <h1>Servicio de Peluquería</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Agendar Corte de Cabello</h2>
        <label for="email">Ingrese su correo electrónico:</label>
        <input type="email" name="email" id="email" required><br><br>
        <table class="item-table">
            <tr>
                <td>
                    <input type="radio" name="haircut" value="Degradado (Fade)" id="Degradado_Fade">
                    <label for="Degradado_Fade">
                        <img src="../IMAGENES/fade.jpg" alt="Degradado (Fade)">
                        <p>Degradado (Fade): Implica que el cabello se corta gradualmente.</p>
                    </label>
                </td>
                <td>
                    <input type="radio" name="haircut" value="Corte Pompadour" id="Corte_Pompadour">
                    <label for="Corte_Pompadour">
                        <img src="../IMAGENES/Corte Pompadour.jpg" alt="Corte Pompadour">
                        <p>Corte Pompadour: Caracterizado por tener el cabello largo en la parte superior y los lados cortos o con un fade.</p>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="haircut" value="Quiff" id="Quiff">
                    <label for="Quiff">
                        <img src="../IMAGENES/Quiff.jpg" alt="Quiff">
                        <p>Similar al pompadour, pero con un flequillo más pronunciado</p>
                    </label>
                </td>
                <td>
                    <input type="radio" name="haircut" value="Corte Crop" id="Corte_Crop">
                    <label for="Corte_Crop">
                        <img src="../IMAGENES/Corte Crop.jpg" alt="Corte Crop">
                        <p>Un corte corto en la parte superior con los lados también cortos, a menudo con una franja texturizada en la parte delantera.</p>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="haircut" value="Corte Taper" id="Corte_Taper">
                    <label for="Corte_Taper">
                        <img src="../IMAGENES/Corte Taper.jpg" alt="Corte Taper">
                        <p>Similar al fade pero con una transición más suave entre los lados y la parte superior.</p>
                    </label>
                </td>
                <td>
                    <input type="radio" name="haircut" value="Undercut" id="Undercut">
                    <label for="Undercut">
                        <img src="../IMAGENES/Undercut.jpg" alt="Undercut">
                        <p>Similar al fade, pero con un contraste más marcado entre los lados cortos.</p>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="haircut" value="Buzz Cut o Rapado" id="Buzz_Cut_o_Rapado">
                    <label for="Buzz_Cut_o_Rapado">
                        <img src="../IMAGENES/Buzz Cut o Rapado.jpg" alt="Buzz Cut o Rapado">
                        <p>Un corte de cabello corto en el que todo el cabello se corta uniformemente.</p>
                    </label>
                </td>
                <td>
                    <input type="radio" name="haircut" value="Corte Caesar" id="Corte_Caesar">
                    <label for="Corte_Caesar">
                        <img src="../IMAGENES/Corte Caesar.jpg" alt="Corte Caesar">
                        <p>Caracterizado por un flequillo más corto y texturizado.</p>
                    </label>
                </td>
            </tr>
            <!-- Agrega las demás opciones de cortes de cabello aquí -->
        </table>
        <label for="date">Seleccione la fecha:</label>
        <input type="date" name="date" id="date" required><br><br>

        <label for="time">Seleccione la hora:</label>
        <input type="time" name="time" id="time" required><br><br>

        <input type="submit" name="schedule" value="Agendar Cita">
    </form>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Comprar Productos para el Cabello</h2>
        <table class="item-table">
        
        </table>
        
        <input type="submit" name="buy" value="Comprar Producto">
    </form>

    <div class="summary">
        <h2>Carrito de Compras</h2>
        <button onclick="toggleSummary()">Ver Resumen</button>
        <div id="summary-details" style="display: none;">
            <?php if (isset($_SESSION['haircut'])): ?>
                <h3>Cita Agendada</h3>
                <p><strong>Correo:</strong> <?php echo $_SESSION['email']; ?></p>
                <p><strong>Corte de Cabello:</strong> <?php echo $_SESSION['haircut']; ?></p>
                <p><strong>Fecha:</strong> <?php echo $_SESSION['date']; ?></p>
                <p><strong>Hora:</strong> <?php echo $_SESSION['time']; ?></p>
                <img src="../IMAGENES/<?php echo str_replace(' ', '_', $_SESSION['haircut']); ?>.jpg" alt="<?php echo $_SESSION['haircut']; ?>" style="width: 50px; height: 50px;">
            <?php endif; ?>

            <?php if (isset($_SESSION['products'])): ?>
                <h3>Productos Comprados</h3>
                <ul>
                    <?php foreach ($_SESSION['products'] as $product): ?>
                        <li>
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 50px; height: 50px;">
                            <strong><?php echo $product['name']; ?>:</strong> <?php echo $product['description']; ?> - Cantidad: <?php echo $product['quantity']; ?> - <em><?php echo $product['email']; ?></em>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <script>
        function toggleSummary() {
            var summaryDetails = document.getElementById('summary-details');
            if (summaryDetails.style.display === 'none') {
                summaryDetails.style.display = 'block';
            } else {
                summaryDetails.style.display = 'none';
            }
        }
    </script>
</body>
</html>
