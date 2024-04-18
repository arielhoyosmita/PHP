<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombres = ["Juan", "María", "José", "Ana", "Pedro", "Laura", "Diego", "Sofía", "Carlos", "Lucía"];
    $apellidos = ["García", "Martínez", "Rodríguez", "Fernández", "López", "Pérez", "González", "Sánchez", "Ramírez", "Torres"];

    function generateNames($n) {
        global $nombres, $apellidos;

        $nombresCompletos = [];

        for ($i = 0; $i < $n; $i++) {
            $nombreAleatorio = $nombres[array_rand($nombres)];     
            $apellidoAleatorio = $apellidos[array_rand($apellidos)];            
            $nombreCompleto = $nombreAleatorio . ' ' . $apellidoAleatorio;       
            $nombresCompletos[] = $nombreCompleto;
        }

        return $nombresCompletos;
    }
    $nombresGenerados = generateNames(10);

    foreach ($nombresGenerados as $nombreCompleto) {
        echo $nombreCompleto . "\n <br>";
    }
    ?>

</body>
</html>