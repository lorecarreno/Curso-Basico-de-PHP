<?php
echo "Hola estoy aprendiendo PHP \n";

//en navegador se usa <br> en la terminal se usa \n que se hace con alt+92

//en wsl el servidor se inicia con sudo /etc/init.d/apache2 start

//Declaracion de variables
$nombre = "Lore";
$apellido = "CG";

echo "Mi nombre es" . " " . $nombre . " " . $apellido . "\n";

// hay una forma mas facil de concatenar que queda mejor para leer:
echo "Mi nombre es $nombre $apellido \n";

//La ventaja de las comillas dobles, otra forma de concatenar es colocando las variables dentro del mensaje que quiero imprimir, pero esto solo funciona si usas comillas dobles ""

//Sin embargo, si no se van a usar variables dentro, es preferible usar comillas simples '', pues, PHP realiza una evaluación previa del texto si se usan comillas dobles.

//Concatenando operaciones matemáticas
echo "El resultado de 4 x 5 es " . 4*5 . "\n";
// Se recomienda colocar estas operaciones dentro de paréntesis para así tener el código más ordenado:
echo "El resultado de 4 x 5 es " . (4*5) . "\n";


?>