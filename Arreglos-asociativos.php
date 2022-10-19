<?php

/* se puede agregar un array dentro de un array, que a su vez este dentro de un array y así de manera indefinida, esto se llama Array Multidimensional

los elementos son key sensitive, así que hay que tener cuidado si escribimos una palabra con una mayúscula y luego en minúscula

Tratar de ser lo más ordenado posible

Poner un limite a cuantas dimensiones va a tener un array */

$personas = array(
    "Lorena" => array(
        "edad" => 41,
        "apellidos" => array(
            "Materno" => "Gareta",
            "Paterno" => "Carreno"
        ),
        "Estudios" => array(
            "Platzi" => "alumna de Platzi",
            "Curso" => "Desarrollo Web"
        )
    )
);

echo "La información de Lorena es la siguiente: " . "edad: " . $personas["Lorena"]["edad"] . ", apellido materno: " . $personas["Lorena"]["apellidos"]["Materno"] . " , apellido paterno: " . $personas["Lorena"]["apellidos"]["Paterno"] . ". " . " Actualmente es " . $personas["Lorena"]["Estudios"]["Platzi"] . " en la escuela de " . $personas["Lorena"]["Estudios"]["Curso"];

echo "\n";

/*

$cafes = array(
    "Expresso" => 9,
    "Latte" => 5,
    "Capuccino" => 12
);

echo "El precio del cafe Expresso es de {$cafes ["Expresso"]}";

echo "\n";

Usar areglos Asociativos es una buena forma de crear listas y asignarles cosas, como por ejemplo precios.
/*












?>