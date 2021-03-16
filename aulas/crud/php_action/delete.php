<?php
//conexão
require_once 'connect.php';
//Iniciar Sessão
session_start();

if (isset($_POST['btn-deletar'])) {
    $id = mysqli_escape_string($connect, $_POST['id']); // Buscando o id pelo input invisível

    //var_dump($_POST);
    $sql = "DELETE FROM clientes WHERE id = $id";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    }else {
        $_SESSION['mensagem'] = "Erro ao deletar.";
        header('Location: ../index.php');
    }
}