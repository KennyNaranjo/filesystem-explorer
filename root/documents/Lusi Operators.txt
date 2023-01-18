<?php

$a = 5;
$b = 6;

var_dump($a + $b, $a - $b, $a * $b, $a / $b, $a % $b);
echo "<br><br>";

var_dump($a == $b, $a != $b, $a < $b, $a > $b, $a <= $b, $a >= $b);
echo "<br><br>";


var_dump($a && $b, $a and $b, $a || $b, $a or $b, $a != $b, $a Xor $b);







#Operador &&

if($a > 1 && $a > $b){
    echo "A es mayor que 1 y mayor que B";
}

echo "<br><br>";

$c = 2;
$d = 1;

#Operador AND

if($c > 1 AND $c > $d){
    echo "C es mayor que 1 y mayor que D";
}

echo "<br><br>";

#Operador  ||
$e = 3;
$f = 5;

if($e > 2 || $e > $f){
echo "E es mayor que 1 o mayor que F";
}

echo "<br><br>";

#Operador OR
$e = 3;
$f = 5;

if($e > 2 || $e > $f){
    var_dump("E es mayor que 1 o mayor que F");
}

echo "<br><br>";

if(4 < 3 or 11 < 10){
    echo "Its true";
}


?>