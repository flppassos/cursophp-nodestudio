<?php
//COOKIE
setcookie('user', 'Felipe Passos', time()+3600);
setcookie('email', 'felipef@minasligas.com.br', time()+3600); //para remover o cookie é só trocar o sinal do tempo para -
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";