<?php
$notas =array();
for ($i = 0; $i < 10; $i++) {
    $notas [$i]= rand(0, 10);
}

for ($i = 0; $i < 10; $i++) {
    echo "Nota $i=$notas[$i] es ";
    switch ($notas[$i]) {
        case 0: case 1: case 2: case 3: 
        case 4: echo " Insuficiente<br>"; break;
        case 5: echo " suficiente<br>"; break;
        case 6: echo " bien<br>"; break;
        case 7: case 8: echo " notable<br>"; break;
        case 9: case 10:echo " sobresaliente<br>"; break;
    }
}

?>


