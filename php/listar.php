<?php 
    include('conexao.php');
    $sql = "SELECT * FROM reclamacoes";
    $resultado = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="../style/listar.css">
    <link rel="icon" href="../img/icon.svg">
</head>
<body>
    <main class="container">
        <h2>Listagem dos Alunos</h2>

        <table>
        <?php
            $rowcount = mysqli_num_rows($resultado);

            if($rowcount > 0){
                echo "<tr>";
                echo "<th>Código da reclamação</th>";
                echo "<th>Nome</th>";
                echo "<th>E-mail</th>";
                echo "<th>Matéria</th>";
                echo "<th>Reclamação</th>";
                echo "<th>Excluir</th>";
                echo "</tr>";

                while($row = mysqli_fetch_array($resultado)){
                    echo "<tr>";
                    echo "<td><a href='altera.php?idReclamacao=".$row['idReclamacao']."' class='btn-special3'>".$row['idReclamacao']."</a></td>";
                    echo "<td>". $row['txtName']. "</td>";
                    echo "<td>". $row['txtEmail']. "</td>";
                    echo "<td>". $row['slctMateria']. "</td>";
                    echo "<td><a href='textAreaPhp.php?idReclamacao=".$row['idReclamacao']."' class='btn-left'>Exibir reclamação</a></td>";
                    echo "<td><a href='excluir.php?idReclamacao=".$row['idReclamacao']."' class='btn-right'>Excluir</a></td>";
                    echo "</tr>";
                }
            }
            else{
                echo "<p>Nenhuma reclamação cadastrada</p>";
                echo "<a href='../html/cadastro.html'>Cadastrar reclamação</a>";
            }
            
        ?>
        </table>
        <br>
        <br>
        <a href="index.php">Ir para a página principal</a>
    </main>

</body>
</html>