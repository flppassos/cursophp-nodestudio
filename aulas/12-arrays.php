<?php
//Arrays Numéricos
$carros = array("Fusca", "Gol", "Palio");
$carros[] = "Amarok"; //inserindo item no array
$carros[10] = "Camaro"; //inserindo item e especificando o seu indice
print_r($carros); //imprimindo array
echo "<br>";
echo $carros[0]; //imprimindo conteudo do array
echo "<hr>";

$motos = array(); //outra forma de criar array
$motos[] = "Honda"; //inserindo item no array
$motos[] = "Yamaha"; //inserindo item no array
$motos[5] = "Suzuki"; //inserindo item e especificando o seu indice
print_r($motos); //imprimindo array
echo "<hr>";

$clientes = ["Rodrigo", "Felipe", "Geraldo"];
print_r($clientes);
echo "<hr>";

//count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach
foreach($clientes as $valor){
    echo $valor."<br>";
}
echo "<hr>";

//Arrays associativos
$pessoa = array("nome"=> "Felipe", "idade"=> 27, "altura"=> 1.75);
$pessoa["cidade"] = "Pirapora";
echo $pessoa["cidade"];
echo "<hr>";

foreach($pessoa as $i => $valor){
    echo $i .":". $valor."<br>";
}
echo "<hr>";

//Array Multidimencional
$times = array(
                "cariocas"=> array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"fluminense"),
                "paulistas"=> array("santos", "palmeiras", "sao paulo"),
                "mineiros"=> array("cruzeiro", "atletico")
            );
foreach($times["cariocas"] as $i => $valor){
    echo $i.":".$valor."<br>";
}

?>