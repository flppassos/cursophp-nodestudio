<?php
//criando funções

function exibirNome($nome){
    echo "Meu nome é $nome";
}

exibirNome("Felipe");
echo "<hr>";

function somaNota($aluno, $n1, $n2, $n3){
    $soma = $n1 + $n2 + $n3;
    echo "O Aluno $aluno, tirou a nota: $soma";
}

somaNota("Felipe", 25,17,21);