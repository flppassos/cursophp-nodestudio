<?php
//incremento
$v1 = 20;
$v2 = 20;
$v3 = 20;
$v4 = 20;

//pre-incremento
echo ++$v1;
echo "<hr>";

//pos-incremento
echo $v2++;
echo "<br>";
echo $v2;
echo "<hr>";

//pre-decremento
echo --$v3;
echo "<hr>";

//pos-decremento
echo $v4--;
echo "<br>";
echo $v4;
echo "<hr>";

//operadores de atribuicao
$a = 10;
$b = 5;

$a += $b; //a = a + b
echo $a."<br>";

$a -= $b; //a = a - b
echo $a."<br>";

$a *= $b; //a = a * b
echo $a."<br>";

$a /= $b; //a = a / b
echo $a."<br>";

?>