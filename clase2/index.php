<?php
   
     // caracter
     $letra = "c";
     // entero
     $numero = 45;
     // cadena
     $cadena = 'Mi nombre es Francisco';
     // flotante
     $decimal = 8.3456;
     // booleano
     $verdadero = true;
     // arreglo
     $carros = array("chico","camión","convertible");
     $edad = array(12, 6, 78, 25);

     // nulos
     $nada = null; 

    echo $cadena . "<br>";
    echo $decimal . "<br>";
    print_r($carros);
    echo "<br>". $carros[1] . "<br>";
    print_r($edad);

?>