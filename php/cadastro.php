<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style/telaimpressaoPHP.css">
    <link rel="icon" href="../img/icon.svg">
</head>
<body>
    <main class="container">
        <?php
            include('conexao.php');
            include('validacao.php');
            $vazio = 0;
            if(empty( $_POST['txtName'])){
                echo "Digite o nome corretamente";
                $vazio = 1;
            }
            else{
                $txtName = $_POST['txtName'];
            }

            if(empty($_POST['txtEmail'])){
                echo "Digite o e-mail corretamente";
                $vazio = 1;
            }
            else{
                $txtEmail = $_POST['txtEmail'];
                
                if(verificaEmail($txtEmail,0)){
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
                echo "Houve erros de dados";
                echo '<br><a href="../html/cadastro.html">Cadastro</a>';
            }
            else{
                $sql = "INSERT INTO reclamacoes (txtName, txtEmail, slctMateria, textaReclamacao)
                VALUES ('".$txtName."', '".$txtEmail."', '".$slctMateria."', '".$textaReclamacao."')";

                $resultado = mysqli_query($con, $sql);

                if($resultado){
                    echo "<p>Dados cadastrados com sucesso</p>";
                    echo '<br><a href="index.php">Ir para a tela principal</a>';
                }
                else{
                    echo "<p>Erro ao tentar cadastrar</p>";
                }
            }

        ?>
    </main>
    
</body>
</html>