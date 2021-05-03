<?php
//Conexao com a base de dados Login
require_once "model/login.php";

//sessao
session_start();

//Botap enviar
if(isset($_POST['btn-acessar'])){
    $erros = array();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if(empty($usuario) or empty($password)){
            $erros[] = "<li>Os campos Usuario/Palavra-passe precisam ser preenchidos</li>";
    }
    else {
        $sql = "SELECT bdprojeto FROM login WHERE nome = '$usuario' ";
        $resultado = mysqli_query($connect, $sql);  
        
        if(mysqli_num_rows($resultado) > 1) {
            $sql = "SELECT * FROM login WHERE nome = '$usuario' AND password = '$password' ";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1){
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: painel.php');
            }
            else{
                $erros[] = "<li>Utilizador e Palavra-passe nao conferem</li>";
            }  
    }
    
    else{
        $erros[] = "<li>Utilizador nao existe</li>";
    }   
    } 
}
?>


<?php
    if(!empty($erros)){
        foreach ($erros as $erro) {
            echo $erro;
        }
    }
?>
<!Doctype html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Acessar o Sistema</title>
        <link rel="icon" href="img/icon.png">
        <style>
        body { background-color: rgb(15, 12, 12);  color: rgb(122, 110, 110);}
        div{display: block; margin-left: 350px;}
        img {border-radius: 7px;}
        input#us{text-indent: 20px;}
        input#aces{color:rgb(122, 110, 110);background-color: rgb(27, 21, 21); margin-left: 70px;}
        input#aces:hover {background-color: chartreuse; color: black;}
        </style>
    </head>
<body>
<br><br>
<div>
<img src="img/icon.png"><br><br>
<form  method="POST" action="model/login.php">
    Usuário: <input id="us" type="text" name="usuario" placeholder="administrador/a"><br><br>
    Palavra-passe: <input type="password" name="password"  size="6"  placeholder="* * * *"><br><br>
    <input id="aces" type="submit" name="btn-acessar" value="Acessar">
</form>
</div>
</body>

</html>