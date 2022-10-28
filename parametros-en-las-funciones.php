<?php



function es_senior ($programador_senior) {
    if ($programador_senior >= 6){
        echo "Eres justo lo que buscamos!\n";
    }
    else {
        echo "Lo siento, vuelve cuando tengas más experiencia.\n";
    }
}

/*

$user_exp = (int) readline("Por favor ingresa la cantidad de años programando ");

echo "\n";

de donde sacamos la variable senior? Para eso estan los parametros. En la declaracion de mi funcion  

es_senior ($user_exp);

*/

do{
    $user_exp = (int) readline("Por favor ingresa la cantidad de años programando ");

    es_senior($user_exp);

} while (true);

echo "\n";

/* uso do while para repetir.



/*

los parámetros son datos que pasamos a la función para que esta los utilice y nos devuelva un resultado a partir de ellos.

**Lecturas recomendadas**

PHP: Argumentos de funciones - Manual

https://www.php.net/manual/es/functions.arguments.php


GitHub - platzi/curso-basico-php-arreglos at bba817883d64bda3a7b0daa2e0d9782cc7155857

https://github.com/platzi/curso-basico-php-arreglos/tree/bba817883d64bda3a7b0daa2e0d9782cc7155857

*/




















