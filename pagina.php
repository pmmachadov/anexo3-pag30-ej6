<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include 'funlib.php';
    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo3-pag30-ej6" . "</td>";
    echo "</tr>";
    echo "<td> " . "Resultado" . "</td>";
    echo "<td> " . "Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => v [6] => w [7] => x [8] => y [9] => z )
Array ( [0] => 1 [1] => a [2] => b [3] => c [4] => d [5] => e [6] => v [7] => w [8] => x [9] => y [10] => z [11] => 6 )
Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => v [6] => w [7] => x [8] => y [9] => z )
Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => v [6] => w [7] => x [8] => y [9] => z [10] => 7 [11] => 8 [12] => 9 )
Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => v [6] => w [7] => x [8] => y [9] => z [10] => 7 [11] => 8 ) 9
Array ( [0] => b [1] => c [2] => d [3] => e [4] => v [5] => w [6] => x [7] => y [8] => z [9] => 7 [10] => 8 ) a
Array ( [0] => 8 [1] => 7 [2] => z [3] => y [4] => x [5] => w [6] => v [7] => e [8] => d [9] => c [10] => b ) Array ( [0] => 7 [1] => 8 [2] => b [3] => c [4] => d [5] => e [6] => v [7] => w [8] => x [9] => y [10] => z ) Array ( [0] => z [1] => y [2] => x [3] => w [4] => v [5] => e [6] => d [7] => c [8] => b [9] => 8 [10] => 7 ) El elemento 'e' se encuentra contenido en el array 'lista1' y ocupa la posición 5" . "</td>";
    echo "</tr>";
    echo "</table>";

    $lista1 = array('a', 'b', 'c', 'd', 'e');
    $lista2 = array('v', 'w', 'x', 'y', 'z');
    $lista1 = array_merge($lista1, $lista2);
    print_r($lista1);
    array_push($lista1, 6);
    array_unshift($lista1, 1);
    print_r($lista1);
    array_pop($lista1);
    array_shift($lista1);
    print_r($lista1);
    array_push($lista1, 7, 8, 9);
    print_r($lista1);
    $ultimo = array_pop($lista1);
    print_r($lista1);
    echo $ultimo;
    $primero = array_shift($lista1);
    print_r($lista1);
    echo $primero;
    $lista1 = array_reverse($lista1);
    print_r($lista1);
    sort($lista1);
    print_r($lista1);
    rsort($lista1);
    print_r($lista1);

    if (in_array('e', $lista1)) {
        echo "El elemento 'e' se encuentra contenido en el array 'lista1' y ocupa la posición " . array_search('e', $lista1);
    } else {
        echo "El elemento 'e' no se encuentra contenido en el array 'lista1'";
    }

    ?>

</body>

</html>