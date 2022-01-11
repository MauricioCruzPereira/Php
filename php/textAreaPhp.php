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
    <title>Reclamação</title>
    <link rel="stylesheet" href="../style/altera.css">
    <link rel="icon" href="../img/icon.svg">
</head>
<body>
    <main class="container">
        <h2>Exibição da reclamação</h2>
        <br>
        <textarea disabled name="textaReclamacao" id="textaReclamacao1" cols="30" rows="10"><?php echo $row['textaReclamacao']?></textarea>
        <br><br>

        <input name="idReclamacao" type="hidden" value="<?php echo $row['idReclamacao']?>">
        <a href="listar.php" id="reclamacoeslink">Ir para a página de reclamações</a>
    </main>

</body>
</html>