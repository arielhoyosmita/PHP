<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $edades = array (
                    "juan" => 0,
                    "maria" => 0,
                    "paco" => 0,
                    "pedro" => 0,
                    "jose" => 0
    );
    foreach ($edades as $clave => $valor) {
        $edad = rand(10, 40) * 2 + 1;
        $edades[$clave] = $edad;
    }
    foreach ($edades as $clave => $valor) {
        echo "Clave: " . $clave . " - Edad: " . $valor . "<br>";
    }
    ?>

</body>
</html>