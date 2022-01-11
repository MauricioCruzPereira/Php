<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <link rel="stylesheet" href="../style/telaimpressaoPHP.css">
    <link rel="icon" href="../img/icon.svg">
</head>
<body>
    <main class="container">
        <?php
            include('conexao.php');
            $idReclamacao = $_GET['idReclamacao'];
            $sql = "DELETE FROM reclamacoes WHERE idReclamacao =".$idReclamacao;
            $resultado = mysqli_query($con, $sql);

            if($resultado){
                echo "<p>Registro excluido com sucesso!</p><br>";
                echo '<img src="../img/banido.gif" alt="Banido"><br>';
                echo '<br><a href="listar.php" class="btn-special4">Voltar para a listagem de reclamações</a>';
            }
            else{
                echo "<p>Erro ao excluir registro no banco de dados!</p>";
            }
        ?>
    </main>
</body>
</html>