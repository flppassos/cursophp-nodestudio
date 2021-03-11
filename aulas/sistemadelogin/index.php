<?php
//Conexão
require_once 'db_connect.php';

//Sessão
session_start();

//Botão enviar
if (isset($_POST['btn-entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)){
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    }else {
        $sql = "Select login from usuarios where login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0){
            $senha = md5($senha);
            $sql = "Select * from usuarios where login = '$login' and senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                $_SESSION['nome'] = $dados['nome'];
                header('Location: home.php');
            }else {
                $erros[] = "<li> Usuário e senha não conferem. </li>";
            }
        }else {
            $erros[] = "<li> Usuário inexistente. </li>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo $erro;
        }
    }
    ?>
    <hr>
    <form action="index.php" method="POST">
        <label for="login">Login:</label><input type="text" name="login"><br>
        <label for="senha">Senha:</label><input type="password" name="senha"><br><br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>
</html>