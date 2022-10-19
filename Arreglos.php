
<?php

/* un arreglo es una variable compuesta, o sea una varíale que contiene múltiples valores.

podemos acceder a esos valores haciendo referencia a sus respectivos subíndices, los subíndices en un arreglo siempre empiezan en cero. */

$edades = [20, 18, 40];

echo "Este es mi array  \n";
echo "Subindice 0 = " . $edades[0] . "\n";
echo "Subindice 1 = " . $edades[1] . "\n";
echo "Subindice 2 = " . $edades[2] . "\n";
echo "\n";

// declarando con la función array
$edadesF = array(20, 18, 40);
echo "Este es mi array usando la función ARRAY \n";
echo "Subindice 0 = " . $edadesF[0] . "\n";
echo "Subindice 1 = " . $edadesF[1] . "\n";
echo "Subindice 2 = " . $edadesF[2] . "\n";