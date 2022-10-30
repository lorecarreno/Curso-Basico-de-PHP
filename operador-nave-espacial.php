<?php

/* 

Lecturas recomendadas

PHP: usort - Manual

https://www.php.net/manual/es/function.usort.php


PHP: Nuevas características - Manual

https://www.php.net/manual/es/migration70.new-features.php

-------------------------------------------------------------
Uno de los usos que podemos darle a este operador es para ordenar un arreglo. Para eso podemos usar la función usort
Esta función ordena según sus valores usando una función de comparación definida por el uruario.

*/

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

usort($precios_de_cafes, function($a, $b){
    return $a <=> $b;
});

var_dump( $precios_de_cafes );

echo "\n";