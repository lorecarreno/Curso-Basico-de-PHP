<?php

$a = 5;
$b = 5;
$b2 = "5"; 
$c = 9;
$d = 2;


// Igual, ==

/* No compara tipos, solo valores. Se denota con   == */
//var_dump( $a == $b );
//var_dump( $a == $b2 );

// Idéntico, ===

/* Compara tipos y valores */
//var_dump( $a === $b );
//var_dump( $a === $b2 ); */

// Diferentes, ! =, ! ==

/* ! = , no compara tipos. */
//var_dump( $a != $b );
//var_dump( $a != $b2 );

/* ! ==, compara tipos y valores */
//var_dump( $a !== $b );
//var_dump( $a !== $b2 );

// Menor que, < 
// $a < $b 

//Mayor que, >
//$a > $b

//Mayor o Igual que, > =
//$a < = $b

//Operador de Nave Espacial, <=>
//echo 2 <=> 1;
//echo "\n";
//echo 2 <=> 1; // 1
//echo 1 <=> 1; // 0
//echo -50 <=> 1 //

/* Si el numero de la izquierda es mayor el numero de la derecha, el resultado será 1
Si el numero de la derecha es igual que el numero de la izquierda , el resultado será 0
Si el numero de la izquierda es menor que el numero de la derecha, el resultado será 1 */

// Fusión de Null, ??

$edad_de_Lore = 41;

echo $edad_de_Milo ?? $edad_de_Lore
echo "\n";

// Si la edad de Juanito no esta definida, usa la edad de pepito
