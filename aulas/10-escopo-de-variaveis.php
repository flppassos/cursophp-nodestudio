<?php
//Escopo Global
$nome = "Felipe Passos";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade(){
    //escopo local
    global $cidade; //passou a ser global
    $cidade = "Pirapora";
}
exibeCidade();
echo $cidade;
echo "<hr>";

function soma(){
   //array especial 
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

?>