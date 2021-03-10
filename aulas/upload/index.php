<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>

<?php

if(isset($_POST['enviar-formulario'])){
    $formatosPermitidos = array("png", "JPG", "jpeg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)){
        $pasta = "arquivos/";
        $temp = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().$extensao;

        if (move_uploaded_file($temp, $pasta.$novoNome)) {
            $mensagem = "Upload feito com sucesso!";
        }else {
            
        }

    }else{
        $mensagem[] = "Formato Inválido!";
    }
}

?>

<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"><br>
    <button type="submit" name="enviar-formulario"> Enviar </button>
</form>

</body>
</html>