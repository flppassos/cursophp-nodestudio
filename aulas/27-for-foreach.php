<?php
//for e foreach
for ($i = 0; $i <=10; $i++){
    echo "7 x $i = ".(7 * $i)." <br>";
}
echo "<hr>";

$titulos = array("Copa do Brasil","Brasileiro","Libertadores", "Mineiro");

foreach ($titulos as $indice => $value) {
    echo $indice." : ".$value."<br>";
}

?>