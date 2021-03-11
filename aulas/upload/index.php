<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>

<?php

// UPLOAD DE ARQUIVOS ÚNICOS

if(isset($_POST['enviar-formulario'])){
    //var_dump($_FILES);
    $formatosPermitidos = array("png", "jpg", "jpeg", "gif", 
                                "PNG", "JPG", "JPEG", "GIF");

    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)){
        $pasta = "arquivos/";
        $temp = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";
    
        if (move_uploaded_file($temp, $pasta.$novoNome)) {
            echo "Upload feito com sucesso! Copiado para $pasta$novoNome <br>";
         }else {
            echo "Erro, não foi possível realizar o Upload. <br>";
        }
    }else{
        echo "Formato Inválido! $extensao não é permitida. <br>";
    }
}


// UPLOAD DE ARQUIVOS MÚLTIPLOS

/*if(isset($_POST['enviar-formulario'])){
    //var_dump($_FILES);
    $formatosPermitidos = array("png", "jpg", "jpeg", "gif", 
                                "PNG", "JPG", "JPEG", "GIF");
    $quantidadedeArquivos = count($_FILES['arquivo']['name']);
    $i = 0;

    while ($i < $quantidadedeArquivos) {

        $extensao = pathinfo($_FILES['arquivo']['name'][$i], PATHINFO_EXTENSION);

        if(in_array($extensao, $formatosPermitidos)){
            $pasta = "arquivos/";
            $temp = $_FILES['arquivo']['tmp_name'][$i];
            $novoNome = uniqid().".$extensao";
    
            if (move_uploaded_file($temp, $pasta.$novoNome)) {
                echo "Upload feito com sucesso! Copiado para $pasta$novoNome <br>";
            }else {
                echo "Erro, não foi possível realizar o Upload. <br>";
            }
        }else{
            echo "Formato Inválido! $extensao não é permitida. <br>";
        }

        $i++;
    }

}*/

?>

<form action="index.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"><br> <!-- Upload de arquivo único -->
    <!--<input type="file" name="arquivo[]" multiple><br> Upload de múltiplos arquivos, necessário transformar o name = arquivo em array - adicionar os colchetes - e adicionar o atributo multiple-->
    <button type="submit" name="enviar-formulario"> Enviar </button>
</form>

</body>
</html>