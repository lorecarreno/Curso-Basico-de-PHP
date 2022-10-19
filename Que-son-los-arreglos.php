<?php

/* Los arreglos son cajitas
.
podemos ver a los arreglos de la misma forma que a las variables, como cajitas. Pero lo genial de estos es que podemos guardar varios valores ahí dentro.
.
¿Y cómo los accedemos? Por medio de una cosita llamada “subíndice”. (todos los arreglos empiezan en 0) A través del subíndice podemos decir cuál de todos los valores que yo tengo guardado dentro de mi cajita quiero usar 😎
.
¿Y para qué me sirven los arreglos? Para absolutamente todo, esta es la forma en la cual podemos atender solicitudes que lleguen desde el Frontend 😏 y también es la forma en la cual podemos agrupar ciertos datos, por ejemplo, podemos agrupar una lista con los nombres de varias personas, son simplemente una maravilla en la programación 😄.
.
#Primer forma
$frutas = array("pera", "manzana", "uva", 2)
#Desde este tipo podemos acceder segun el indice 

#Segunda forma
$frutas = ["Uva","Pera","Sandia"];
#Desde este tipo podemos acceder segun el indice 

#Arreglo Asociativo
$joe = array('name'=>'Jose','age'=>25,'country'=>'mexico');
#Para acceder a este tipo debemos hacerlo de lasiguente forma $nameArray['namePropiedad']

/*  Tenemos mas de 1 forma de escribir arrays