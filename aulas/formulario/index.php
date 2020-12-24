<?php
/* Validações
Funções (filter_unput - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Formulário</title>
    <style>
        .caixa {
          margin-bottom: 10px;  
        }
    </style>
</head>
<body>
    <!--<fieldset class='caixa'>
        <form action="dados.php" method="POST">
            <label for="nome">Nome: </label><input type="text" name="nome">
            <label for="email">E-mail: </label><input type="email" name="email">
            <button type="submit"> Enviar </button>
        </form>
    </fieldset>
    <fieldset class='caixa'>
        <form action="dados.php" method="GET">
                <label for="nome">Nome: </label><input type="text" name="nome">
                <label for="email">E-mail: </label><input type="email" name="email">
                <button type="submit"> Enviar </button>
            </form>        
    </fieldset>
    <a href="dados.php?nome=Bruna&email=bruna@email.com">Enviar dados GET</a>-->
    
    <?php
        if (isset($_POST['enviar-formulario'])){
            //array de erros
            $erros = array();

            //validações filter
            /*
            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
                $erros[] = "Idade precisa ser um inteiro.";
            }
            if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $erros[] = "EMAIL inválido";
            }
            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
                $erros[] = "IP inválido";
            }
            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
                $erros[] = "URL inválida";
            }*/

            //Sanitize
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            //echo $nome."<br>";

            //var_dump($erros);

            if(!empty($erros)){
                foreach ($erros as $erro) {
                    echo "<li> $erro </li>";
                }
            }else{
                echo "Dados inseridos corretamente.";
            }
        }
    ?>
    <fieldset class='caixa'>
        <form action="index.php" method="POST">
                <label for="nome">Nome: </label><input type="text" name="nome">
                <label for="idade">Idade: </label><input type="text" name="idade">
                <label for="email">E-mail: </label><input type="text" name="email">
                <label for="url">URL: </label><input type="text" name="url">
                <button type="submit" name='enviar-formulario'> Enviar </button>
            </form>        
    </fieldset>
</body>
</html>