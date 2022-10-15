<?php

/*Un tipo de dato simplemente es una forma de diferenciar los datos que tenemos por medio de su tipo. Por ejemplo, si es un número, una letra, una palabra, etc.*/

//En programación podemos tener varios tipos de datos, pero los más conocidos son: numéricos, cadenas de caracteres, booleanos y sin valor

//Numéricos : Representan a los datos de tipo numérico. Estos se pueden subdividir en:

/*Integer: número sin decimales. 
Por ejemplo: 50; 70; 300.

/*Float: número con decimales. 
Por ejemplo: 5.3; 4.7; 8.24.

/*Double: número con decimales, 
similar a float, pero con capacidad de almacenar más decimales. Especialmente útil para variables o constantes que requieren valores con mayor precisión, por ejemplo el número PI que tiene muchos decimales.

//Cadenas de caracteres: Quiere decir que almacenaremos texto. Tenemos dos grupos:

/*Char: es un solo caracter que puede ser una letra, número o un símbolo como por ejemplo #, @, %, a o 5.

/*String: es una cadena de más de un caracter como por ejemplo “¡Hola, Mundo!”

//Boolean: Es decir que algo es verdadero (true) o falso (false).

//Sin valor: Sirve para expresar que una variable no tiene valor (Null) o que está no definido (Undefined)

//El tipado de PHP
/*PHP tiene tipado débil, es decir, no indicamos el tipo de variable al declararla, ya que puede deducir qué tipo de dato estás usando. Veamos un ejemplo:*/

$numerito = 0;

var_dump($numerito); //var_dump() lo usamos para ver la información de la variable, en este caso de $numerito.

echo "\n"; //salto de linea.

//Conversión de tipos automática
/*PHP es capaz de convertir un tipo de dato a otro de forma automática según el contexto donde se emplee. Por ejemplo, si sumamos un número con un string, PHP evaluará ambos como números:*/ 

$numerito = "23"; //String.
$numerito = $numerito + 2 ; //Le sumamos al string un numero.

var_dump($numerito); //var_dump() imprime la informacion.

echo "\n"; //salto de linea.

/*Si ejecutamos nuestro archivo PHP nos indica que $numerito es de tipo integer (int) con un valor de 25, es decir, realiza la conversión internamente de String a int de la cadena "23" y luego le suma el número 2:*/

/*Conclusión
PHP es muy permisivo, pero esto nos puede llevar a malas prácticas. Por ello es recomendable siempre monitorear los tipos de datos*/



?>