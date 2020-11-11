<?php
    $x = 5;
    $y = '5';
    
    // Operadores aritméticos
    echo $x + $y;
    echo "<br />";

    echo $x - $y;
    echo "<br />";

    echo $x * $y;
    echo "<br />";

    echo $x / $y;
    echo "<br />";
    
    echo $x % $y;
    echo "<br />";

    echo $x ** $y;
    echo "<br />";
    
    // Operadores de asignación
    //$x = $x * $y;
    $x *= $y;
    echo $x;
    echo "<br />";

    // Operadores de comparación
    /*$x === $y
    $x >= $y
    $x <= $y
    $x <> $y
    $x !== $y*/

    // Operadores de incremento o decremento
    echo --$x;
    echo "<br />";
    echo $x;


?>