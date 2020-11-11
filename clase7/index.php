<?php

$frutas = array("platano","manzana","uvas","fresa");

print_r($frutas);
echo "<br>";
echo $frutas[3];
echo "<br>";

echo count($frutas) . " elementos";
echo "<br>";

for($i=0; $i<count($frutas); $i++){
    echo $frutas[$i] . "<br />";
}

$edades = array("Francisco" => 34, "Beatriz" => 23, "Ivan" => 27);

print_r($edades);

echo "<br>";

echo $edades['Beatriz'];

echo "<br>";

foreach($edades as $key => $value){
    echo $key . " tiene el valor de " . $value . "<br />";
}



?>