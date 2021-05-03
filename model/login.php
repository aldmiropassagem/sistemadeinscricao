<?php
include_once "conexao.php";
session_start();

if((isset($_POST['usuario'])) && (isset($_POST['password']))){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $result_usuario = "SELECT * FROM login WHERE nome = '$usuario' && password = '$password' ";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if(isset($resultado)){
        $_SESSION['usuarioID'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioPassword'] = $resultado['password'];
            if(isset($_SESSION['usuarioID'])){
                header("Location: ../painel.php");
            }else {
                header("Location: ../loginadmin.php");
            }

    }
} else{
    $_SESSION['loginErro'] = "Usuário Inválido";
}

?>