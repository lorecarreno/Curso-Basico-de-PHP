<?php

/* El ciclo while es uno de los ciclos más famosos en programación, es conocido como un “ciclo indefinido” porque no sabemos cuando va a terminar.
.

¿Pero cómo que no sabemos, si yo se que si hago un ciclo del 1 al 10 va a terminar cuando llegue a 10?

.
Sí, pero ahora imaginas que haces un ciclo que termina cuando tu usuario escriba “0”, en ese caso tú no sabes cuándo tu usuario escribirá 0. Puede ser en la primera iteración o puede ser en la iteración 27462 👀.
.
Adicional a ello, recuerda siempre verificar que tu ciclo tenga fin, NUNCA PONGA while(true) y si lo haces, que sea por la ciencia 😄.
.
Un bucle es una estructura de control que nos ayuda a repetir el codigo las veces que lo necesitemos.

-Bucle
-Contador
-Iteracion

. El bucle while, al igual que el if, recibe una condicion booleana.
mientras que esa condicion sea true, el ciclo se va a repetir.
Dentro del while nosotros podemos cambiar el valor de nuetra variable para detener el ciclo.

. Por eso se dice que este es un ciclo indefinido. */

$contador = 0;

//contador es una variable que me permite llevar la cuenta de cuantas veces hemos repetido ese bucle.
//cuando hablamos de iteracion nos referimos a que buecle estamos, si es la primera iteracion o la segunda, etc.

/* while($contador < 10) {
    echo "Hola, espero que esto funcione bien y no se cicle. \n";
    $contador++;
} 

echo "\n";

*/

//La variable contador se puede usar asi:

while ($contador < 10) {    
    echo "Actualmente, estoy en la iteracion $contador \n";
    $contador++;  
}

echo "\n";

# en consola va a empezar a contar desde 0 a 9

/* Si queremos iniciar en 1 podemos poner $contador++ ates que el echo. Podemos también iniciar en 1 y poner que sea <= a 10

/* IMPRORTANTE siempre poner el $contador y el condicional (va a ayudar a poner un tope en el ciclo).

//--------------------
/* Lecturas recomendadas

PHP: while - Manual

https://www.php.net/manual/es/control-structures.while.php


GitHub - platzi/curso-basico-php-arreglos at 459c21b2a478510eeec059e87ed285e1c7f84109

https://github.com/platzi/curso-basico-php-arreglos/tree/459c21b2a478510eeec059e87ed285e1c7f84109 */