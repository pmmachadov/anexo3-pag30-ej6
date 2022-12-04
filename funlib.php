<?php

$lista1 = array('a', 'b', 'c', 'd', 'e');
$lista2 = array('v', 'w', 'x', 'y', 'z');

// Combina en el array “lista1” los valores que éste contiene junto con los del array “lista2”.

$lista1 = array_merge($lista1, $lista2);
// print_r($lista1);

// Agrega al array “lista1” el elemento ‘6’ por la derecha y el elemento ‘1’ por la izquierda.

array_push($lista1, 6);
array_unshift($lista1, 1);
// print_r($lista1);

// Elimina del array “lista1” los elementos insertados en el apartado anterior.

array_pop($lista1);
array_shift($lista1);
// print_r($lista1);

// Añade al final del array “lista1” los elementos: ‘7’,’8’,’9’.

array_push($lista1, 7, 8, 9);
// print_r($lista1);

// Elimina el último elemento del array "lista1" y muestra tanto el valor extraído como el array resultante.

$ultimo = array_pop($lista1);
// print_r($lista1);
// echo $ultimo;

// Elimina el primer elemento del array “lista1” y muestra tanto el valor extraído como el array resultante.

$primero = array_shift($lista1);
// print_r($lista1);
// echo $primero;

// Muestra el array "lista1" en orden inverso

$lista1 = array_reverse($lista1);
// print_r($lista1);

// Muestra el array "lista1" ordenado de menor a mayor, y de mayor a menor

sort($lista1);
// print_r($lista1);
rsort($lista1);
// print_r($lista1);

// Indica si el elemento ‘e’ se encuentra contenido en el array “lista1”, y la posición que ocupa.

// if (in_array('e', $lista1)) {
//     echo "El elemento 'e' se encuentra contenido en el array 'lista1' y ocupa la posición " . array_search('e', $lista1);
// } else {
//     echo "El elemento 'e' no se encuentra contenido en el array 'lista1'";
// }

?>