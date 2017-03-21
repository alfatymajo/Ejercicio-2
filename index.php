<?php
echo "Hola mundo". "<br><br>";

//Ejercicio N° 6 
//Forma 1: Creando un array con contructor

$arrayForma1 = array(

    rand(0,150),
    rand(0,150),
    rand(0,150),
    rand(0,150),
    rand(0,150)
);
echo "----- Array Forma 1 -----<br><br>";
var_dump($arrayForma1);

echo "<br><br>";

//Forma 2: Creando array con valores literales (Con corchetes)

$arrayForma2 [0] = rand(0,150);
$arrayForma2 [1] = rand(0,150);
$arrayForma2 [2] = rand(0,150);
$arrayForma2 [3] = rand(0,150);
$arrayForma2 [4] = rand(0,150);


echo "----- Array Forma 2 -----<br><br>";
var_dump($arrayForma2);
echo "<br><br>";
$arrayForma3 = array();
array_push($arrayForma3, rand(0,150),rand(0,150),rand(0,150),rand(0,150),rand(0,150));
echo "----- Array Forma 3 -----<br><br>";
var_dump($arrayForma3);


?>