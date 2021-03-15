<?php 
//Conexão
include_once 'php_action/connect.php';
//Cabeçalho da Página
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                            echo "<td>". $dados['nome'] ."</td>";
                            echo "<td>". $dados['sobrenome'] ."</td>";
                            echo "<td>". $dados['email'] ."</td>";
                            echo "<td>". $dados['idade'] ."</td>";
                            echo "<td><a href='editar.php?id=".$dados['id']." class='btn-floating orange'><i class='material-icons'>edit</i></a></td>";
                            echo "<td><a href='' class='btn-floating red'><i class='material-icons'>delete</i></a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
</div>

<?php
//Rodapé da Página
include_once 'includes/footer.php';
?>

        

