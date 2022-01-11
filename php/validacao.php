<?php   
    function verificaEmail($txtEmail,$id){
        include('conexao.php');
        $sql = "SELECT 1 FROM reclamacoes WHERE txtEmail = '$txtEmail'";

        if($id > 0){
            $sql = $sql . " AND idReclamacao <> $id";
        }

        $resultado = mysqli_query($con, $sql);

        $rowcount = mysqli_num_rows($resultado);

        if($rowcount > 0){
            return true;
        }
        else{
            return false;
        }
    }
?>