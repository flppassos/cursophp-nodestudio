<?php
// MÉTODO POST
/*
$name = $_POST["nome"];
$email = $_POST["email"];

echo "Seu nome é $name e seu E-mail é: $email <br>";
var_dump($_POST);
*/

$name = $_GET['nome'];
$email = $_GET['email'];

echo "Seu nome é $name e seu E-mail é: $email <br>";
var_dump($_GET);