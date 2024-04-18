<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = array();

    function inicializar_array($numero_de_elementos, $min, $max) {

        global $numeros;
        
        for ($i = 0; $i < $numero_de_elementos; $i++) {
            $numeros[] = rand($min, $max);
        }
    }

    inicializar_array(10,5,50);

    print_r($numeros);
    ?>
</body>
</html>