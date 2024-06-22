<!-- en php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la edad</title>
</head>
<body>
    <h2>Resultado:</h2>
    <?php
    if (isset($_POST['nombre']) && isset($_POST['edad'])) {
        $nombre = $_POST['nombre'];
        $edad = intval($_POST['edad']);

        if ($edad < 18) {
            echo "<p>$nombre es menor de edad.</p>";
        } else {
            echo "<p>$nombre es mayor de edad.</p>";
        }
    } else {
        echo "<p>No se recibieron los datos del formulario.</p>";
    }
    ?>
</body>
</html>
