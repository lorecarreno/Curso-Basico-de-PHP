<?php

//creamos un arreglo que en resumen es una lista

$personas = [
    "Lorena" => 41,
    "Milo" => 1,
    "Nano" => 4
];

//var_dump Me dice que tipo de dato es, en este caso me dice que es un array que tiene 3 elementos y me los pone todos. Me permite inspeccionar todo el contenido de mi variable.

var_dump ( $personas );
echo "\n";

//print_r Este método nos brinda la información más ordenada y limpia de leer, sin embargo, no nos da mayores detalles a diferencia de var_dump()

print_r( $personas);
//hago un salto de linea para mejorar la visibilidad del codigo.
echo "\n";

//ningun método es mejor que otro, ya que va a depender del contexto en el que los necesites.

//comentarios
# otra forma de comentar en una linea
/*comentarios abajo puedo seguir
comentando sin problema*/