<?php

/* 
Este ciclo es muy similar al while, 
con la particularidad de que no importa si la conidición es verdadera o es falsa, el ciclo se va a ejecutar por lo menos una vez, al menos una, ya si se vuelve a ejecutar o no dependerá de si la condición es verdadera o falsa, pero al menos una vez sí que se va a ejecutar 😄.
.
¿Pero de qué sirve este ciclo? en casos en donde hay que ejecutar nuestra lógica por lo menos una vez, este ciclo ahorra el uso de un if innecesario en ciertas ocasiones, por ejemplo, cuando hay que guardar el nombre de un usuario.
.
(si quiero hacer esto, debo verificar si el nombre de usuario escrito no existe, y si sí existe entonces debo pedir otro nombre de usuario, esto se hace fácil con un ciclo do… while 😉)  
----------------------------------
do {
    // Aqui va todo el codigo que se va a repetir.
}
while ( *condicion* );
-----------------------------------
*/
$usernames = ["Milo","Nano","Mawsi"];

do {
    $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
    echo "\n";
} while ( in_array ($username, $usernames) );

echo "\n";


