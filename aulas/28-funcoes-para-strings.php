<?php
//  Funções para Strings
/*  strtoupper
    strtolower
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos
*/
$nome = "FeLiPe PaSsOs";
$maiusculo = strtoupper($nome);
echo $maiusculo;
echo "<hr>";

$minusculo = strtolower($nome);
echo $minusculo;
echo "<hr>";

$msg = "Feliz Natal! E um próspero Ano Novo.";
echo substr($msg, 6, 2);
echo "<hr>";

echo str_pad($msg, 45, "*", STR_PAD_BOTH);
echo "<hr>";

echo str_repeat($msg, 5);
echo "<hr>";

echo strlen($msg);
echo "<hr>";

$msg2 = "Aniversário";
$novaMensagem = str_replace("Natal", $msg2, $msg);
echo $novaMensagem;
echo "<hr>";

echo strpos($novaMensagem,"próspero");
