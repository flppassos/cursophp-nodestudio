<?php
/******************Escalares *******************/
//string
$mensagem = "Olá Mundo!";
var_dump($mensagem);
echo "<br>";

if(is_string($mensagem)):
    echo "é uma string";
else:
    echo "não é uma string";
endif;
echo "<hr>";

//int
$idade = 27;
var_dump($idade);
echo "<br>";

if(is_int($idade)):
    echo "é um inteiro";
else:
    echo "não é um inteiro";
endif;
echo "<hr>";

//float
$altura = 1.75;
var_dump($altura);
echo "<br>";

if(is_float($altura)):
    echo "é um float";
else:
    echo "não é um float";
endif;
echo "<hr>";

//boolean
$casado = true;
var_dump($casado);
echo "<br>";

if(is_bool($casado)):
    echo "é um Booleano";
else:
    echo "não é um Booleano";
endif;
echo "<hr>";

/****************** Compostos *******************/
//Array
$carros = array("Gol", "Camaro", "Uno", 2020, 1.99, true);
var_dump($carros);
echo "<br>";

if(is_array($carros)):
    echo "é um Array";
else:
    echo "não é um Array";
endif;
echo "<hr>";

//object
class Cliente {
    public $nome;
    public function atribuirnome($n) {
        $this->nome = $n;
    }
}

$cliente = new Cliente();
$cliente->atribuirnome("Felipe Passos");
var_dump($cliente);
echo "<br>";

if(is_object($cliente)):
    echo "é um Objeto";
else:
    echo "não é um Objeto";
endif;
echo "<hr>";

/****************** Especiais *******************/
//NULL
$vazio = NULL;
var_dump($vazio);

?>