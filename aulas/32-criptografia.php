<?php

$senha = "123456";
$novaSenha = base64_encode($senha);

echo "Base64: ".$novaSenha."<br>";
echo "Sua senha é:".base64_decode($novaSenha);
echo "<hr>";

echo "Md5: ". md5($senha)."<br>";
echo "Sha1: ". sha1($senha);
echo "<hr>";

/*$senhaDb = '$2y$10$lYrAv8cRwn9vFac5UeVSX.pVKp/efo6hyo7WI3Fl0qsBU/B0PIedG';

if (password_verify($senha, $senhaDb)) {
    echo "Senha Válida";
}else {
    echo "Senha inválida";
}*/

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura;
