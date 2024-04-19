<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Verificador de Números Primos</title>
</head>

<body>
    <h2>Verificador de Números Primos</h2>
    <form method="POST" action="">
        <label for="cantidad">cantidad a mostrar:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required value="10">
        <button type="submit">Procesar</button>
    </form>

    <?php
    // Función para determinar si un número es primo
    function esPrimo($n) {
        if ($n < 2) {
            return false;
        }
        for ($div = 2; $div * $div <= $n; $div++) {
            if ($n % $div == 0) {
                return false;
            }
        }
        return true;
    }

    // Generar números aleatorios y verificar si son primos
    function verificarNumerosPrimos($cantidad) {
        $resultados = [];
        for ($i = 0; $i < $cantidad; $i++) {
            $numeroAleatorio = rand(1, 100); // Genera un número aleatorio entre 1 y 100
            $esPrimoFlag = esPrimo($numeroAleatorio);
            $resultados[] = [
                'numero' => $numeroAleatorio,
                'esPrimo' => $esPrimoFlag
            ];
        }
        return $resultados;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cantidad = intval($_POST['cantidad']);

        $resultados = verificarNumerosPrimos($cantidad);

        echo "<h3>Resultados obtenidos:</h3>";
        echo "<ul>";
        foreach ($resultados as $resultado) {
            $numero = $resultado['numero'];
            $esPrimo = $resultado['esPrimo'] ? "es primo" : "no es primo";
            echo "<li>$numero: $esPrimo</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>


