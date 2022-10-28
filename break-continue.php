<?php

$tiendita_de_cafes = array (
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

//EJEMPLO DE COMO USAR BREAK
//Me permite romper el ciclo.

/*

foreach ($tiendita_de_cafes as $cafe => $precio) {
    echo "Actualmente encontré al café $cafe \n";

    if ($cafe == "Latte") {
        echo "Encontré Latte!";
        break;
    }
}

echo "\n";

*/

//EJEMPLO DE COMO USAR CONTINUE
//Me salta el siguiente ciclo sin importar si el bloque de código se ha terminado de ejecutar.

foreach ($tiendita_de_cafes as $cafe => $precio) {
    if ($cafe == "Recalentado") 
        continue;
    
    echo "El café $cafe es muy rico! \n";
}

echo "\n";

/* 

Lecturas recomendadas

PHP: foreach - Manual

https://www.php.net/manual/es/control-structures.foreach.php


GitHub - platzi/curso-basico-php-arreglos at 70a65087b83ba3ece4e741e284442663266e20f0

https://github.com/platzi/curso-basico-php-arreglos/tree/70a65087b83ba3ece4e741e284442663266e20f0

*/