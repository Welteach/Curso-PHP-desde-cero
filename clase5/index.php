<?php

$hora = 21;

if($hora > 6 && $hora < 12){
   echo "<h1>Hola! buenos días</h1>";
}else if($hora >= 12 && $hora <= 18){
   echo "<h1>Hola! buenas tardes</h1>";
}else{
    echo "<h1>Hola! buenas noches</h1>";
}



?>