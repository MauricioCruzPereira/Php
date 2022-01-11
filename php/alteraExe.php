<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="../style/telaimpressaoPHP.css">
    <link rel="icon" href="../img/icon.svg">
</head>
<body>
    <main class="container">
        <?php
            include('conexao.php');
            include('validacao.php');
            $vazio = 0;
            $idReclamacao = $_POST['idReclamacao'];
            if(empty( $_POST['txtName'])){
                echo "Digite o nome corretamente";
                $vazio = 1;
            }
            else{
                $txtName = $_POST['txtName'];
            }

            if(empty( $_POST['txtEmail'])){
                echo "Digite o e-mail corretamente";
                $vazio = 1;
            }
            else{
                $txtEmail = $_POST['txtEmail'];
                if(verificaEmail($txtEmail, $idReclamacao)){
                    echo "Email já cadastrado</p><br>";
                    $vazio = 1;
                }
            }

            if(empty( $_POST['slctMateria'])){
                echo "Selecione a máteria corretamente";
                $vazio = 1;
            }
            else{
                $slctMateria = $_POST['slctMateria'];
            }

            if(empty($_POST['textaReclamacao'])){
                echo "Escreva algo na reclamação!";
                $vazio = 1;
            }
            else{
                $textaReclamacao = $_POST['textaReclamacao'];
            }

            if($vazio == 1){
                echo "<br>Houve erros de dados, volte e corrigi-os<br>";
                echo '<br><a href="listar.php">Voltar para a listagem de reclamações</a>';  
            }
            else{

                $sql = "UPDATE reclamacoes SET
				   txtName='$txtName',
				   txtEmail='$txtEmail', 
				   slctMateria='$slctMateria',
                   textaReclamacao='$textaReclamacao'
				   WHERE idReclamacao='$idReclamacao'"; 

                $resultado = mysqli_query($con, $sql);

                if($resultado){
                    echo "<p>Dados alterados com sucesso</p>";
                    echo '<br><a href="listar.php" class="btn-special4">Voltar para a listagem de reclamações</a>';
                }
                else{
                    echo "Erro ao tentar alterar os dados";
                }
            }

        ?>
    </main>
    
</body>
</html>