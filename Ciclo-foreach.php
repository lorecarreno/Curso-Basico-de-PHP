<?php

//El ciclo foreach es genial 🥰!!

/* La ventaja de este ciclo es que nos permite recorrer cualquier elemento que sea iterable sin tener que contar con los elementos del mismo. El por si solo detecta cuantos elementos tiene dicho elemento.

SINTAXIS BASICA

foreach ( $iterable as $valor ) {
    //codigo a repetir por cada valor
}

SINTAXIS BASICA OBTENIENDO LAS LLAVES DEL ELEMENTO ITERABLE

foreach ( $iterable as $llave => $valor ) {
    //codigo a repetir por cada valor
} */

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Late" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $cafe => $price) 
    echo "El cafe $cafe cuesta $$price USD. \n";


echo "\n";

/* las variables $cafe y $price no estan declaradas, el foreach las declara solito 🥰 
Además es muy fácil de leer y es muy útil. Nosotros nisiquiera tenemos que decirle cuanto mide el arreglo para poder usarlo. Eso es genial.
*/

//💡 👩‍💻**SI NUESTRO BLOQUE DE CODIGO TIENE UNA SOLA LINEA PODEMOS OMITIR ESTAS LLAVES {} ESTA REGLA SE APLICA CON TODOS LOS CICLOS.**👩‍💻



