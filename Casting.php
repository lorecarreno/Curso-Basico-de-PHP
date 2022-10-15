<?php

//Casting es cuando forzamos que un tipo de dato se convierta en otro tipo de dato.
$numerito = "5";

var_dump( $numerito );
echo "\n";

//ejemplo de casting cambiando de string a integer.
$numerito = (int) $numerito;

var_dump( $numerito );

echo "\n";

/*$dias = 5.89;
//ejemplo de casting cortando la parte decimal.
$dias = (int) $dias;

var_dump( $dias );*/

echo "\n";

$dias = 0;
//ejemplo de casting integer a boolean.
$dias = (bool) $dias;
var_dump( $dias );//detalles de la variable.
echo "\n";//salto de linea.






