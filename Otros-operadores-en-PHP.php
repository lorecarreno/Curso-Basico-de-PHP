<?php

/* PHP también posee otros operadores importantes y muy usados como los de asignación, incremento/decremento y concatenación.

Operador de asignación
Representado por el signo = se usa para asignarle un valor determinado a una variable o constante:  

<?php
$a = 100;
$b = 50 + 30;

Este no se debe leer como “igual a” pues para expresar igualdad tenemos otros operadores como == (igual a) o === (idéntico a).

Operadores de incremento/decremento
Estos operadores solo afectan a números y strings, pero no arrays, objects ni resources. Además, decrementar valores null tampoco tiene efecto, sin embargo, incrementarlos resulta en 1.

Operador de incremento
Representado por la secuencia de signos += son operadores utilizados para abreviar la forma en que incrementamos el valor de una variable. Veamos la siguiente línea de código:

<?php
$contador = 0;
$contador = $contador + 10;

echo $contador;

echo "\n";
#-----------------------
# Mensaje en pantalla:
# 10

Esta puede ser simplificada usando un operador de incremento:

<?php
$contador = 0;
$contador += 10;

echo $contador;

echo "\n";
#-----------------------
# Mensaje en pantalla:
# 10

Si solo queremos incrementar en 1 nuestra variable podemos abreviar el código aún más:

$contador = 0;
$contador++;

echo $contador;

echo "\n";
#-----------------------
# Mensaje en pantalla:
# 1
La secuencia ++ es otro operador de incremento que nos permite solo incrementar en una unidad nuestra variable.

Operador de decremento
Es la contraparte delos operadores de incremento.
Están representadas por -= y -- en donde la primera puede decrementar en más de una unidad, pero la segunda solo nos permite reducir en 1 el valor de nuestra variable:
$contador_1 = 100;
$contador_1 -= 10;

$contador_2 = 10;
$contador_2--;

echo "El contador 1 es igual a $contador_1 \n";
echo "El contador 2 es igual a $contador_2 \n";

#-----------------------
# Mensaje en pantalla:
# El contador 1 es igual a 90
# El contador 2 es igual a 9
Válido también para la multiplicación y división
Estos operadores están representados por la secuencia de signos *= y /=:

<?php
$contador_1 = 5;
$contador_1 *= 10;

$contador_2 = 1000;
$contador_2 /= 2;

echo "El contador 1 es igual a $contador_1 \n";
echo "El contador 2 es igual a $contador_2 \n";

#-----------------------
# Mensaje en pantalla:
# El contador 1 es igual a 50
# El contador 2 es igual a 500

Operadores de concatenación
Su funcionamiento es similar a los operadores de incremento/decremento.
Son normalmente empleados para concatenar variables de tipo String con otras cadenas de caracteres.
Es representado por la siguiente secuencia: .=.
<?php
$nombre = "Carlos";
$nombre .= " " . "Santana";
# Esto es lo mismo que: $nombre = $nombre . " " . "Santana";

echo $nombre;
echo "\n"; # Salto de línea
#-----------------------
# Mensaje en pantalla:
# Carlos Santana

