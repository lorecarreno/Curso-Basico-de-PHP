<?php

/*Una varible empieza simpre con un signo de $ y podemos cambiar su valor*

Una variables es como una cajita donde se guardan cosas.(Dentro de esa cajita podemos guardar cualquier cosa). Se pueden tener la cantidad de cajitas que uno quiera.
se pueden guardar y sacar y poner cosas una y otra vez.
Una constante no se puede cambiar.la cajita queda sellada. solo se puede ver lo que tiene dentro pero no se puede cambiar.

en php las variables se inician con un signo de dolar. 
$nombre = "Lore";
Para php cualquier cosa que este despues del signo $ va a ser un nombre.
La asignacion es lo que vamos a guardar dentro de la cajita llamada $nombre*/

$numero_1 = 8;
$numero_2 = 5;
$nombre_1 = "Lore";

echo $numero_1 + $numero_2;
echo "\n";

//para definir constantes en php usamos la funcion define.

/*Una Constante es algo que nunca cambia, es decir, una vez que se le asigne un valor ya no es posible modificarlo ni sustituirlo.
Una constante siempre mantendrá su valor intacto desde el momento en que se declara*/

//es una buena practica poner los nombres de las constantes en mayuscula.

define("NUMERO_PI", 3.14);
echo NUMERO_PI;
echo "\n";

?>