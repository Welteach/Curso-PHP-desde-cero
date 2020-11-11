<?php
     // Funciones para strings
     $mensaje = "Hoy voy a aprender mucho";

     // longitud
     echo strlen($mensaje);

     echo "<br>";
     //Número de palabras
     echo str_word_count($mensaje);

     echo "<br>";
     //Reversa
     echo strrev($mensaje);

     echo "<br>";
     //Encontrar texto
     echo strpos($mensaje, "aprender");

     echo "<br>";
     //Reemplazar texto
     echo str_replace("aprender", "nadar", $mensaje);

     
     echo "<br>";
     //Convertir a minusculas
     echo strtolower($mensaje);
 
     echo "<br>";
     //Convertir a mayúsculas
     echo strtoupper($mensaje);

     echo "<br>";
     //Comparar cadenas
     echo strcmp("leer", "leer");

     echo "<br>";
     //Substraer cadena
     echo substr($mensaje, 10, 5);

     echo "<br>";
     //Remover espacios en blanco
     echo trim("       hola     soy       Francisco");


?>