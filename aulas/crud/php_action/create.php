<?php
//conexão
require_once 'connect.php';
//Iniciar Sessão
session_start();
//Clear
function clear($input) {
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-cadastrar'])) {
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    //var_dump($_POST);
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', $idade)";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
        header('Location: ../index.php');
    }else {
        $_SESSION['mensagem'] = "Erro ao cadastrar.";
        header('Location: ../index.php');
    }
}
