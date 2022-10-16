<?php

/* Operadores Aritméticos
Adición ⇒ +

Sustracción ⇒ -

Multiplicación ⇒ *

División ⇒ /

Modulo ⇒ % ⇒ Se usa para conocer el residuo de una división ⇒ $a % $b

Potenciación ⇒ ** ⇒ $a ** $b

Identidad ⇒ Sirve para convertir un string a un int o float, según sea 

el caso ⇒ + ⇒ +$a

Negación ⇒ Convierte un numero positivo a negativo ⇒ -$a */

/* echo 5 - 3;
echo "\n"; */

/*se puede poner en una variable*/ 

/* $resultado = 5 - 3;
echo $resultado; */

//echo "\n";

/* $resultado = 5 ** 3; // 5 x 5 x 5  
echo $resultado; */

/* echo ( 5 * 6 ) . " ". ( 80 / 4 );

echo 5 % 2; */

/* ejemplo */

$horas = 7201;

echo "$horas segundos convertidos a horas son " . ($horas / 3600);
echo " Sobran " . ($horas % 3600) . " segundos.";

echo "\n";





?>