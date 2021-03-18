<?php
//Manipulação de Arquivos
/*
fopen();
fclose();
fwrite();
!feof();
fgets();
filesice();
*/

$arquivo = 'arquivo.txt';
$conteudo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique soluta inventore atque ut laborum! Mollitia natus debitis impedit, ducimus assumenda nam error reiciendis quasi ratione placeat, dolore sint maxime dicta.\r\n";

$tamanhoArquivo = filesize($arquivo);

//$arquivoAberto = fopen($arquivo, 'a'); //aberto para escrita
//fwrite($arquivoAberto, $conteudo);

$arquivoAberto = fopen($arquivo, 'r'); //aberto para leitura
while (!feof($arquivoAberto)) {
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha."<br>";
}

fclose($arquivoAberto);
