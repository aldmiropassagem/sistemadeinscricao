<?php
require_once "conexao.php";

if (isset($_POST["btn-alterar"])){
    $id = $_POST['id'];
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

    $sql = "UPDATE candidato SET nome = '$nome',  nascimento = '$nascimento', naturalidade = '$naturalidade', provincia = '$provincia', pai = '$pai', mae = '$mae', sexo = '$sexo', bi = '$bi', nivel = '$nivel', classe = '$classe', repete = '$repete', curso = '$curso', inscricao = '$inscricao', proveniencia = '$proveniencia', municipio = '$municipio', bairro = '$bairro', rua = '$rua', casa = '$casa', telefone = '$telefone', outrotelf = '$outrotelf', facebook = '$facebook', whatsapp = '$whatsapp', email = '$email' WHERE id = '$id' ";
    

    if (mysqli_query ($connect, $sql)){

        header('Location: ../painel.php');
    }
    else{
        header('Location: ../painel.php?Erro!!!');

    }
}
?>

