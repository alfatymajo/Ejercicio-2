<?php
// Primer ejercicio ------> Comentario de una linea

/*
Comentario en bloque

*/

//Definimos la primera variable

$nombre = "Alexis";



//Concatenamos con el operador .
//Concatenamos un TAG Html para un salto de linea
echo "Hello World! " .$nombre . "<br>";

echo $nombre ."<br><br>";

//Ejercicio 1 Guia PHP 2017
$contador = 0;
$acumulador = 0;
while ($acumulador < 1000) 
{
    echo $acumulador;
    $acumulador = $acumulador + $contador;
    $contador = $contador +1;
    echo " - ";
}

echo "<br><br>". $contador;



?>