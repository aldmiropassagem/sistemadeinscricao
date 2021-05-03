<?php
include_once "conexao.php";

if(isset($_GET['id'])){
   
$id = $_GET['id'];

 $sql = "DELETE FROM candidato WHERE id = '$id'";
 
    if (mysqli_query ($connect, $sql)){

        header('Location: ../painel.php');
    }
        else{
            header('Location: ../painel.php?Erro!!!');

        }
}
?>