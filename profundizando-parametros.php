<?php

/*

Lecturas recomendadas

PHP: Argumentos de funciones - Manual

https://www.php.net/manual/es/functions.arguments.php#functions.variable-arg-list


PHP: rfc:spread_operator_for_array

https://wiki.php.net/rfc/spread_operator_for_array#advantages_over_array_merge


GitHub - platzi/curso-basico-php-arreglos at cf6b660b4ea0a809aaf864c629d9451129c73c4e

https://github.com/platzi/curso-basico-php-arreglos/tree/cf6b660b4ea0a809aaf864c629d9451129c73c4e

*/


/*
function suma ($a = 1, $b = 1){
    echo "La suma de $a + $b es: " .$a + $b . "\n";
}

suma(10);

$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];

$resultado = [...$arreglo1,...arreglo2];

var_dump($resultado);
*/

// **ejemplo de array unpacking**

function suma($a, $b)
{
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

$numeros = [1000,2000];
$numeros2 = [12, 24];
$numeros3 = [10, 22];
$numeros4 = [101, 200];

suma(...$numeros);
suma(...$numeros2);
suma(...$numeros3);
suma(...$numeros4);


echo "\n";

// ahora la forma inversa, si queremos sumar una cantidad infinita de numeros proporcionados por el usuario

function suma_infinita(...$params) {

}

suma_infinita(1, 2, 3);
