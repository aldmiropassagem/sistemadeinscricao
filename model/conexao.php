<?php

$host = "localhost";
$user= "root";
$password = "";
$db = "bdprojeto";


$connect = new mysqli ($host, $user, $password, $db);

/*if ($connect-> connect_errno != 0){
    echo "Erro de conexão".$connect -> connect_errno;
}
else {
    echo "<h2>Conectado à Base de Dados!!!</h2>";
}*/

?>