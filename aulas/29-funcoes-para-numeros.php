<?php
//  Funções para Números
/*  
    number_format
    round
    ceil
    floor
    rand
*/

$valor = 2850.91;
$salario = number_format($valor, 2, ",", "."); //função para formatar numeros
echo "O meu salário é R$ $salario";
echo "<hr>";

echo round(3.41); //função de arredondamento, acima de 0,5 arredonda pra cima.
echo "<hr>";
echo ceil(4.01); //função arredonda sempre pra cima
echo "<hr>";
echo floor(4.99); //função arredonda sempre pra baixo
echo "<hr>";

echo rand(1,999); //função de números aleatórios