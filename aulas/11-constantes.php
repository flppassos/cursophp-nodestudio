<?php
//constantes são globais
define("NOME", "Felipe"); //sempre declarado em letras maiusculas
define("IDADE", 27);
define("ALTURA", 1.75);
define("CASADO", false);

define("TIMES", ['cruzeiro', 'atletico', 'america']);

echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é '.ALTURA.'.' ;
echo "<hr>";

echo TIMES[1];

?>