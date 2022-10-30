<?php


/* 1️⃣7️⃣ Retornar valores de una función significa decirle explicitamente a la función qué es lo que debe devolver. 
Esto lo hacemos con la palabra reservada 'return' y usualmente guardamos ese valor en una variable. */

function Gandhi() {

    $numero_aleatorio = rand(1, 4);
    $frase_de_Gandhi = "";

    switch ($numero_aleatorio) {
        case 1:
            echo "Si quieres cambiar al mundo, cámbiate a ti mismo.\n";
            break;

        case 2:
            echo "El miedo tiene su utilidad, pero la cobardía no.\n";
            break;

        case 3:
            echo "El buen ser humano es amigo de todo aquello vive.\n";
            break;

            
        default:
            echo "Me gustan los zapallos.\n";
            break;
    }

    return $frase_de_Gandhi;
}

echo Gandhi();

echo "\n";