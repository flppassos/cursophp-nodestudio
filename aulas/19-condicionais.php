<?php
//condicionais if else

$numero = 20;

if ($numero == 10):
    echo "É igual a 10";
elseif ($numero <= 9):
    echo "é menor do que 9";
else:
    echo "É diferente de 10";
endif;
echo "<hr>";

$media = 7;
echo ($media >= 7) ? "Aprovado" : "Reprovado";
echo "<hr>";

//condicionais switch
$cor = "rosa";

switch ($cor):
    case "vermelho":
        echo "Sua cor é vermelho";
        break;
    case "azul":
        echo "Sua cor é azul";
        break;
    case "preto":
        echo "Sua cor é preto";
        break;
    case "verde":
        echo "Sua cor é verde";
        break;
    default:
    echo "Cor não disponível";
endswitch;
