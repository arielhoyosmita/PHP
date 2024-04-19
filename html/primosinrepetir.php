<?php
function esPrimo($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= ceil(sqrt($numero)); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

function mostrarNumerosPrimos($cantidad)
{
    $primosEncontrados = [];
    $numerosEvaluados = 0;

    while ($numerosEvaluados < $cantidad) {
        $numeroAleatorio = rand(1, 100);
        if (!in_array($numeroAleatorio, $primosEncontrados) && esPrimo($numeroAleatorio)) {
            $primosEncontrados[] = $numeroAleatorio;
            echo "$numeroAleatorio es un número primo.<br>";
            $numerosEvaluados++;
        } else {
            echo "$numeroAleatorio no es primo.<br>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
        $cantidad = intval($_POST['numero']);
        echo "<p>Número recibido: $cantidad</p>";
        echo "<h3>Listando números primos:</h3>";
        mostrarNumerosPrimos($cantidad);
        echo '<br><a href="primo.php">Volver</a>';
    } else {
        echo '<form method="post" action="">
            <label for="numero">Introduce un número:</label>
            <input type="number" id="numero" name="numero" min="1" required>
            <button type="submit">Enviar</button>
        </form>';
    }
    ?>
</body>
</html>

