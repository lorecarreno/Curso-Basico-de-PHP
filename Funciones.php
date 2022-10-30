<?php

/*
Clase 1️⃣4️⃣

Qué es una Función?

Podemos verlas como un chef mágico al cuál tú le das los ingredientes y te devuelve un pastel ya hecho.

- También podemos verlas como "ponerle nombre a un bloque de código."

💡 En resumen una función sirve para separar todo un bloque de código, ponerle un nombre, y *utiluzarla cuantas veces queramos* sin preocuparnos por cómo trabaja por dentro.

Ayuda a tener código más ordenado, reutilizable y fácil de entender.
👩‍💻
Separar el código en funciones para después reutilizarlo es una buena práctica. -Copiar y pegar código no lo es.

*/

function get_pokemon() {

    $numero_aleatorio = rand (1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu\n";
            break;

        case 2:
            echo "Charmander\n";
            break;

        case 3: 
            echo "Mewtwo\n"; 
            break;

        default:
            echo "Lo siento, no hay pokémon esta vez\n";
    }

}



//Uso la función rant que me permite generar un número aleatorio y mando a llamar la función pokemon.

get_pokemon();

echo "\n";


/*

Lecturas recomendadas

PHP: Funciones definidas por el usuario - Manual

https://www.php.net/manual/es/functions.user-defined.php


GitHub - platzi/curso-basico-php-arreglos at 846b9a1746e218f0eaf39824b2299e61d75b040b

https://github.com/platzi/curso-basico-php-arreglos/tree/846b9a1746e218f0eaf39824b2299e61d75b040b

*/
