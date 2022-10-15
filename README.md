# Curso-Basico-de-PHP

# Curso Básico de PHP: Instalación, Fundamentos y Operadores
*Si alguna respuesta esta incorrecta puedes realizar un pull request para colocar la respuesta correcta :D.*
#### ¿Cuál es la diferencia entre cliente y servidor?
		 El cliente es el dispositivo desde el cual cualquier usuario se conecta a mi página web se conecta a mi página web, mientras que el servidor es una computadora que es mía y que está alojando mi página web.
###### Razón:  Los sitios web son guardados en un servidor, el cual entrega una copia de la misma a cada cliente que la solicite. Además, el servidor también se encarga de responder cada solicitud del usuario
###### Vídeo: [Cómo interactúa una página web con tu backend](https://platzi.com/clases/2646-php/44431-como-interactua-una-pagina-web-con-tu-backend/ "Cómo interactúa una página web con tu backend")
------------
#### ¿Cuál es la diferencia entre servidor físico y servidor web?
		 El servidor físico es una computadora que existe en el mundo real y que aloja mi página web, mientras que el servidor web es un programa que gestiona las solicitudes HTTP que llegan al servidor físico y se resuelven por medio de algún lenguaje de programación.
 ###### Razón: Servidor físico o VPS : Es la computadora que se encarga de guardar tu página web y mantener accesible 24/7. Se le conoce como servidor y siempre está conectado a  internet. A través de él podemos definir ciertas reglas de seguridad para nuestra página.
 ###### Servidor web Es un programa que corre dentro de nuestro servidor físico y se encarga de gestionar cualquier petición que llegue al mismo. Esta petición es procesada por algún lenguaje de programación y al final devuelve una respuesta.
###### Vídeo: [Cómo interactúa una página web con tu backend](https://platzi.com/clases/2646-php/44431-como-interactua-una-pagina-web-con-tu-backend/ "Cómo interactúa una página web con tu backend")
------------
#### ¿Por qué deberías aprender a usar la terminal?
		 Porque me facilita el trabajo. Me ayuda a moverme más rápido a través de mi computadora, además de que puedo hacer pruebas rápidas en ella.
###### Razón:  La terminal facilita el trabajo. Permite usar todas las herramientas y todos los servicios del sistema sin tener que visualizar nada.
###### Vídeo: [Hackea tu miedo a la terminal](https://platzi.com/clases/2646-php/44435-hackea-tu-miedo-a-la-terminal/ "Hackea tu miedo a la terminal")
------------
#### ¿Cuál es la diferencia entre usar comillas simples o comillas dobles en PHP?
 		 Si uso comillas dobles, entonces puedo poner variables dentro de mi string y PHP podrá interpretarlas. En cambio, si uso comillas simples, PHP no podrá interpretarlas y me escribirá directamente la variable.
###### Razón: En PHP cuando tu usas comillas dobles “” Php es capaz de leer cualquier variable que se coloque ahí. Si se usaras comillas simples ’ ’ no funcionan.
###### Vídeo: [Sintaxis básica de PHP](https://platzi.com/clases/2646-php/44437-sintaxis-basica-de-php/ "Sintaxis básica de PHP")
------------
#### Quiero debuggear una variable, pero quiero tener toda la información posible de esa variable. ¿Cuál función de debugging debería usar?
 		 var_dump()
###### Razón: Esta función muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor. Las matrices y los objetos son explorados recursivamente con valores  para mostrar su estructura.
###### Vídeo: [Debugging y comentarios](https://platzi.com/clases/2646-php/44438-debugging-y-comentarios/ "Debugging y comentarios")
------------
#### ¿Por qué es importante usar comentarios en mi programa?
 		 Porque me permite entender qué hace una línea de código que escribí. Mi yo del futuro u otros programadores me lo agradecerán.
###### Razón: Los comentarios sirven para comentar como funcionan partes de código en PHP se pueden realizar comentarios usando:  /**/, // Comentario, # Comentario
###### Vídeo: [Debugging y comentarios](https://platzi.com/clases/2646-php/44438-debugging-y-comentarios/ "Debugging y comentarios")
------------
#### ¿Qué tipo de dato debería usar si quiero guardar la edad de una persona?
 		 int
###### Razón: Las edades son manejadas con números enteros, e int permite números enteros.
###### Vídeo: [Tipos de datos](https://platzi.com/clases/2646-php/44440-tipos-de-datos/ "Tipos de datos")
------------
#### Necesito saber si un asiento dentro de una sala de cine está ocupado. ¿Qué tipo de dato debería usar?
 		 bool
###### Razón: El tipo de dato bool, puede tener 2 valores TRUE o FALSE, este es el mejor tipo de dato para el planteamiento dado, si el asiento no esta ocupado es FALSE, y sí lo  está es TRUE.
###### Vídeo: [Tipos de datos](https://platzi.com/clases/2646-php/44440-tipos-de-datos/ "Tipos de datos")
------------
#### ¿Debería aprender tipos de datos aunque PHP es un lenguaje que no necesita definir tipado explícito?
		 Sí. Esto me permite tener mayor control sobre mis variables y los valores que guardo dentro de ellas.
###### Razón: Permite entender que tipo de valores acepta, retorna, ya que estos tipos de datos son usados en la mayoría de lenguajes de programación.
###### Vídeo: [Tipos de datos](https://platzi.com/clases/2646-php/44440-tipos-de-datos/ "Tipos de datos")
------------
#### ¿Cómo se llama la acción de forzar la conversión de un tipo de dato en otro de forma explícita?
		 Casting
###### Razón: El Casting es la manera de indicar al interprete de PHP para forzar el cambio de un tipo de dato a otro deseado. Se puede acceder a esta utilidad anteponiendo el tipo de dato entre paréntesis antes de un valor o una variable al momento de la asignación o inicialización.
###### Vídeo: [¿Qué es el casting?](https://platzi.com/clases/2646-php/44441-que-es-el-casting/ "¿Qué es el casting?")
------------
#### ¿Cuál sería el resultado de forzar la conversión de un string vacío a un tipo de dato "bool"?
		 false
###### Razón: Cuando se realizan conversiones a boolean, los siguientes valores se consideran false: el boolean false mismo el integer 0 y -0 (cero), el float 0.0 y -0.0 (cero), el valor string vacío, y el string "0", un array con cero elementos, el tipo especial NULL (incluidas variables no establecidas), objetos SimpleXML creados desde etiquetas vacías.
[PHP: Booleanos](https://www.php.net/manual/es/language.types.boolean.php "PHP: Booleanos")
###### Vídeo: [¿Qué es el casting?](https://platzi.com/clases/2646-php/44441-que-es-el-casting/ "¿Qué es el casting?")
------------
#### ¿De qué tipo de operadores estamos hablando si tengo dos sentencias que están siendo evaluadas por un operador "AND" o un operador "OR"?
		 Lógicos
###### Razón: Son los operadores que  ayudan a combinar dos o mas afirmaciones para definir si una sentencia es cierta o falsa. Su uso esta basado en tablas de verdad. Los operados lógicos son: AND (and, &&),  OR (or,||) y NOT (!)
###### Vídeo: [Operadores lógicos: ¿qué son las tablas de verdad?](https://platzi.com/clases/2646-php/44443-operadores-logicos-que-son-las-tablas-de-verdad/ "Operadores lógicos: ¿qué son las tablas de verdad?")
------------
#### ¿Cuál sería el resultado de la siguiente operación lógica?
		 <?php
		 $soy_muy_inteligente = true;
		 $voy_a_pasar_este_examen = true;
		 var_dump($soy_muy_inteligente && $voy_a_pasar_este_examen);
		 		 
> true
###### Razón: De acuerdo con la tabla de verdad de AND, TRUE y TRUE es  TRUE.  [PHP Operadores Lógicos](https://www.php.net/manual/es/language.operators.logical.php "PHP Operadores Lógicos")
###### Vídeo: [Operadores lógicos: ¿qué son las tablas de verdad?](https://platzi.com/clases/2646-php/44443-operadores-logicos-que-son-las-tablas-de-verdad/ "Operadores lógicos: ¿qué son las tablas de verdad?")
------------
#### ¿Cuál es el resultado de la siguiente operación en PHP?
		 echo 5 + "5 michis";

> 10, pero con una advertencia de tipos.
###### Razón: PHP es capaz de sumar valores númericos de un string pero no es buena práctica debido a que se mezclan los tipos de datos, que es la advertencia que aparece al ejecutarlo.
###### Vídeo: [Operadores aritméticos](https://platzi.com/clases/2646-php/44445-operadores-aritmeticos/ "Operadores aritméticos")
------------
#### ¿Cuál de los siguientes es un operador relacional?
		 >=
###### Razón:  Los operadores relacionales  permiten comparar dos valores. [Operadores de Comparación](https://www.php.net/manual/es/language.operators.comparison.php "Operadores de Comparación")
###### -  Mayor que > 
###### -  Menor que <
###### -  Mayor o igual que >= 
###### -  Menor o igual que <=
###### - Igual que == 
###### - Nave espacial <=>
###### - Fusiónn de null ?? 
###### Vídeo: [Operadores relacionales](https://platzi.com/clases/2646-php/44446-operadores-relacionales/ "Operadores relacionales")
------------
#### En un parque de atracciones hay una atracción en donde solo pueden subir niños que tengan 10 años o menos. ¿Cuál de las siguientes expresiones me permite hacer esta comparación?
		 $edad <= 10
###### Razón: La edad debe ser menor o igual que 10, el operador para realizar esa comparación es: <=
###### Vídeo: [Operadores relacionales](https://platzi.com/clases/2646-php/44446-operadores-relacionales/ "Operadores relacionales")
------------
#### ¿Cuál sería el resultado de ejecutar esta expresión en PHP?
		 <?php
		 $a = 1;
		 $c = $b = $a;

 > Tendría 3 variables. Todas con el valor "1". El valor de la variable $a es asignado a la variable $b y el valor de la variable $b es asignado a la variable $c.
###### Razón: Debido a que en la anterior operación la asociatividad es derecha, primero el valor de la variablae a, que tiene de valor 1 es asignado a la variable  b, y finalmente a la variable c.
###### Vídeo: [Precedencia de operadores](https://platzi.com/clases/2646-php/44448-precedencia-de-operadores/ "Precedencia de operadores")
------------
#### ¿Cuál sería el resultado de ejecutar esta expresión en PHP?
		 $michis_toman_agua = true;
		 $michis_ladran = false;
		 $resultado = $michis_toman_agua and $michis_ladran;
		 var_dump($resultado);

> true
###### Razón: En este caso la precedencia de operadores, dice que and su operación de asociatividad es derecha, por lo que primero realiza la asignación, y luego lo compara dando true, ya que sí fuera con el operador && sería false.
###### Vídeo: [Precedencia de operadores](https://platzi.com/clases/2646-php/44448-precedencia-de-operadores/ "Precedencia de operadores")
------------
#### Si quisiera obtener únicamente el número entero de un número que tiene decimales en PHP, ¿qué operación debería hacer?
 		 <?php
		 $numero_decimal = 28.56;
		 $numero_entero = (int) $numero_decimal;
		 echo $numero_entero;
###### Razón: Si se desea quitar la parte decimal de un valor,  se debe realizar un casteo, el valor debe ser convertido a int, para conservar solo los números enteros del valor.
###### Vídeo: [Tu primer programa: ¿qué hora es?](https://platzi.com/clases/2646-php/44449-tu-primer-programa-que-hora-es/ "Tu primer programa: ¿qué hora es?")
------------
#### ¿Cuál es la estructura de una variable en PHP? 
		 Signo de dólar + nombre + asignación
###### Razón: Para crear una variable en PHP, siempre debe inicar con el simbolo de $, seguido del nombre, y la asignación. $saludo = "Buen día", $miEdad = 159;
###### Vídeo: [Variables y constantes](https://platzi.com/clases/2646-php/44439-variables-y-constantes/ "Variables y constantes")

