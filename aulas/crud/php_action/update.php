<?php
//conexão
require_once 'connect.php';
//Iniciar Sessão
session_start();

if (isset($_POST['btn-editar'])) {
    $id = mysqli_escape_string($connect, $_POST['id']); // Buscando o id pelo input invisível
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    //var_dump($_POST);
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = $idade WHERE id = $id";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    }else {
        $_SESSION['mensagem'] = "Erro ao atualizar.";
        header('Location: ../index.php');
    }
}
