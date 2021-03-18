<?php
//Datas
echo date('d')."<br>"; //retorna o dia (número)
echo date('D')."<br>"; //retorna o dia por extenso com 3 digitos
echo date('m')."<br>"; //retorna o mês (número)
echo date('M')."<br>"; //retorna o mês por extenso com 3 digitos
echo date('y')."<br>"; //retorna o ano (número 2 dígitos)
echo date('Y')."<br>"; //retorna o ano (número 4 dígitos)

date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');
echo "<hr>";

$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');

echo $date."<br>";
echo $datetime."<br>";
echo "<hr>";

//Time
echo time()."<br>";
$time = time();
echo date('d/m/Y', $time);


