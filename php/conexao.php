<?php 
    $hostname = "localhost";
    $database = "reclamacao";
    $username = "root";
    $password = "";
    $con = mysqli_connect($hostname, $username, $password) 
    or die(mysqli_error()."Erro ao tentar conectar-se ao banco");
    mysqli_select_db($con, $database);
?>