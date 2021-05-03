<?php
require_once "conexao.php";

if (isset($_POST["btn-guardar"])){
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $naturalidade = $_POST['naturalidade'];
    $provincia = $_POST['provincia'];
    $pai = $_POST['pai'];
    $mae = $_POST['mae'];
    $sexo = $_POST['sexo'];
    $bi = $_POST['bi'];
    $nivel = $_POST['nivel'];
    $classe = $_POST['classe'];
    $repete = $_POST['repete'];
    $curso = $_POST['curso'];
    $inscricao = $_POST['inscricao'];
    $proveniencia = $_POST['proveniencia'];
    $municipio = $_POST['municipio'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $casa = $_POST['casa'];
    $telefone = $_POST['telefone'];
    $outrotelf = $_POST['outrotelf'];
    $facebook = $_POST['facebook'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];

    $sql = "INSERT INTO candidato (nome, nascimento, naturalidade, provincia, pai, mae, sexo, bi, nivel, classe, repete, curso, inscricao, proveniencia, municipio, bairro, rua, casa, telefone, outrotelf, facebook, whatsapp, email)  VALUES ('$nome', '$nascimento', '$naturalidade', '$provincia', '$pai', '$mae', '$sexo', '$bi', '$nivel', '$classe', '$repete', '$curso', '$inscricao', '$proveniencia', '$municipio', '$bairro', '$rua', '$casa', '$telefone', '$outrotelf', '$facebook', '$whatsapp', '$email')";

    if (mysqli_query($connect, $sql)){

        header('Location: ../consulta.php?Inscrito!!!');
    }
    else{
        header('Location: ../inscrever.php?Erro!!!');

    }
}
?>