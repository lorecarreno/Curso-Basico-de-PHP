<?php

/*  ☝ Switch es otra estructura de control que nos ayuda a tomar decisiones, pero… ¿cuál es la diferencia con if y else? 🤔  */

/*  .
La principal diferencia es que switch funciona con casos, es decir, dependiendo de un caso tomaremos una decición u otra. Mientras que if y else te permiten hacer comparaciones, switch te ayuda a decidir qué hacer dependiendo del caso que tengas presente.
.
¿Switch me sirve para reemplazar if y else? ¿Cuál es mejor? ¡Ninguna es mejor! Cada estructura tiene su caso de uso particular, la pregunta correcta para hacer es:
.
¿Cuál estructura de control me permite tomar esta decisión más fácilmente?
.
Si se necesita hacer comparaciones, entonces if y else son las estructuras que debo usar, mientras que si necesito elegir un caso de entre los múltiples escenarios que pueda tener entonces switch puede ser lo que estás buscando 😄 */

//https://www.php.net/manual/es/control-structures.switch.php

// Michi 1: 9
// Michi 2: 4
// Michi 3: 3
// Michi 4: 9
// Michi 5: 1

$michi = 1;

switch ($michi) {

    case 1:
    case 4:
        echo "Su numero favorito es el 9";
        break;

    case 2:
        echo "Su numero favorito es el 4";
        break;

    case 3:
        echo "Su numero favorito es el 3";
        break;

    case 5:
        echo "Su numero favorito es el 1";
        break;

    default:
        echo "Ese michi no existe :c";
}

echo "\n";  

**Lecturas recomendadas**

PHP: switch - Manual

https://www.php.net/manual/es/control-structures.switch.php


GitHub - platzi/curso-basico-php-arreglos at 25ef35e40ef52679f2aaf21e9af219154cd33c2f

https://github.com/platzi/curso-basico-php-arreglos/tree/25ef35e40ef52679f2aaf21e9af219154cd33c2f