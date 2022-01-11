<?php 
    include('conexao.php');
    $idReclamacao = $_GET['idReclamacao'];
    $sql = "SELECT * FROM reclamacoes WHERE idReclamacao = '$idReclamacao'";
    $resultado = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="../style/altera.css">
    <link rel="icon" href="../img/icon.svg">
</head>
<body>
    <main class="container">
        <form action="alteraExe.php" method="POST">
            <h2>Alterar registro de reclamação</h2>
            <table>
                <tr>
                    <td><label for="txtName">Nome: </label></td>
                    <td><input type="text" name="txtName" id="txtName" value="<?php echo $row['txtName']?>" required></td>
                </tr>

                <tr>
                    <td><label for="txtEmail">Email: </label> </td>
                    <td><input type="email" name="txtEmail" id="txtEmail" value="<?php echo $row['txtEmail']?>" required></td>
                </tr>

                <tr>
                    <td><label for="slctMateria">Matéria: </label></td>
                    <td><select name="slctMateria" id="slctMateria">
                    <option value="<?php echo $row['slctMateria']?>" readonly="readonly"><?php echo $row['slctMateria']?></option>
                    <option value="Programação para web">Programação para web</option>
                    <option value="Projeto integrador">Projeto integrador</option>
                    <option value="Rede de computadores">Rede de computadores</option>
                    <option value="Português">Português</option>
                    <option value="inglês">inglês</option>
                    <option value="Física">Física</option>
                    <option value="História">Historia</option>
                    <option value="Geografia">Geografia</option>
                    <option value="Biologia">Biologia</option>
                    <option value="Matemática">Matemática</option>
                </select></td>
                </tr>

                <tr>
                    <td><label for="textaReclamacao">Reclamação: </label> </td>
                    <td> <textarea name="textaReclamacao" id="textaReclamacao" cols="30" rows="10" required><?php echo $row['textaReclamacao']?></textarea></td>
                </tr>

            </table>
            
            <input name="idReclamacao" type="hidden" value="<?php echo $row['idReclamacao']?>">
            <input type="submit" value="Alterar" class="raise">
        </form>

        <br>

        <a href="listar.php">Listagem de reclamações</a>
    </main>
    
</body>
</html>