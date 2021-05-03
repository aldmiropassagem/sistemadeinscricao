<?php
include_once "model/conexao.php";
?>
<!Doctype html>
<html lang="pt-pt">
    <head>
 <meta charset="UTF-8">
 <title>Painel Administrativo</title>       
<style>body{background-color:rgb(15, 12, 12); color:rgb(109, 105, 101);}
h2 {text-align: center;}
table{width: auto; height: auto; margin-left:5px; display:block;background-color: rgb(20, 12, 12);color:rgb(109, 105, 101);}
table#geral td {width:auto; text-align: center; padding:auto;cursor:pointer;}
table#geral td.a {color:rgb(17, 9, 1);background-color:rgb(70, 70, 70);}
table#geral td.a:hover{ background-color: snow; color:black; transition:3s;}
table#geral td.b {color:rgb(16, 1, 17);background-color:rgb(60, 60, 50);}
table#geral td.b:hover{background-color:silver;color:darkblue;transition:3s;}
table#geral td.c {color:rgb(24, 8, 10);background-color:rgb(50, 50, 50);}
table#geral td.c:hover{background-color:skyblue;color:solid black; transition:3s;}
table#geral td.ni {color:snow;background-color:grey;}
table#geral td.ni:hover{background-color:black; color:skyblue; transition:3s;}
table#geral td#eliminar{background-color:red; color:black;}
table#geral td#eliminar:hover{font-size:13pt;background-color:darkred; color:black; transition:1s;}
table#geral td#editar{background-color:green; color:white;}
table#geral td#editar:hover{font-size:13pt;background-color:darkgreen;color:black; transition:1s;}
table#geral td#nin{font-size:12pt;}
table#geral td#num {font-style: oblique; }
header#cb {text-align:center;}
header#cb h1 {font-size: 40pt; margin-top: 8px;  text-shadow: 1px 1px 1px black; color: rgb(122, 110, 110); padding: 0px; margin-top: 0px; border-bottom:  rgb(105, 100, 100);}
header#cb h2 {font-size: 35pt;  font-family: Arial, Helvetica, sans-serif; color: rgb(122, 110, 110);}
header#cb a {float:left;font-size:18pt; color:rgb(109, 105, 101);}
header#cb a:hover {background-color:brown; color:rgb(12, 12, 12);}
</style>
</head>
<body>
    <br>
<header id="cb">
<h1>Sistema de Gerenciamento do C.E.P.O Inscrições</h1>
<h2>Dados dos Inscritos ao C.E.P.O Inscriçõs</h2>
<br><br>
<a href="index.php">Voltar à Página Inicial</a>
</header>
<br><br>
<table id="geral">
    <thead>
        <tr>
            <td class="ni"><b>Nº de Inscrição</b></td>
            <td class="a" id="nom"><b>Nome completo</b></td>
            <td class="a" id="dn"><b>Data de Nascimento</b></td>
            <td class="a" id="nt"><b>Naturalidade</b></td>
            <td class="a" id="pr"><b>Província</b></td>
            <td class="a" id="pa"><b>O Nome do Pai</b></td>
            <td class="a" id="ma"><b>O Nome da Mãe</b></td>
            <td class="a" id="se"><b>Sexo</b></td>
            <td class="a" id="nb"><b>Nº do B.I</b></td>
            <td class="b" id="na"><b>Nível Académico</b></td>
            <td class="b" id="cl"><b>Classe</b></td>
            <td class="b" id="pl"><b>Pela</b></td>
            <td class="b" id="cr"><b>Curso</b></td>

            <td class="b" id="ti"><b>Tipo de Inscrição</b></td>
            <td class="b" id="ep"><b>Escola de Proveniência</b></td>
            <td class="c" id="mu"><b>Município de Residência</b></td>
            <td class="c" id="br"><b>Bairro</b></td>
            <td class="c" id="ru"><b>Rua</b></td>
            <td class="c" id="ca"><b>Casa Nº</b></td>
            <td class="c" id="tl"><b>Telefone</b></td>
            <td class="c" id="ot"><b>Outro Telefone</b></td>
            <td class="c" id="fb"><b>Facebook</b></td>
            <td class="c" id="wp"><b>WhatsApp</b></td>
            <td class="c" id="el"><b>Email</b></td>
        </tr>
        
    
        
        <?php 
        $sql = "SELECT * FROM candidato";
        $resultado = mysqli_query($connect, $sql);
        foreach($resultado as $dados){    
    ?>
    <tr>
        <td  class="ni" id="nin" ><?php echo $dados['id']; ?></td>
        <td  class="a"><?php echo $dados['nome'];?></td>
        <td  class="a" id="num"  ><?php echo $dados['nascimento']; ?></td>
        <td  class="a"><?php echo $dados['naturalidade']; ?></td>
        <td  class="a"><?php echo $dados['provincia']; ?></td>
        <td  class="a"><?php echo $dados['pai'];?></td>
        <td  class="a"><?php echo $dados['mae']; ?></td>
        <td  class="a"><?php echo $dados['sexo']; ?></td>
        <td  class="a"  id="num"><?php echo $dados['bi']; ?></td>
        <td  class="b"><?php echo $dados['nivel'];?></td>
        <td  class="b"><?php echo $dados['classe']; ?></td>
        <td  class="b"><?php echo $dados['repete']; ?></td>
        <td  class="b"><?php echo $dados['curso']; ?></td>
        
        <td  class="b"><?php echo $dados['inscricao'];?></td>
        <td  class="b"><?php echo $dados['proveniencia']; ?></td>
        <td  class="c"><?php echo $dados['municipio']; ?></td>
        <td  class="c"><?php echo $dados['bairro'];?></td>
        <td  class="c" id="num"><?php echo $dados['rua']; ?></td>
        <td  class="c" id="num"><?php echo $dados['casa']; ?></td>
        <td  class="c" id="num"><?php echo $dados['telefone']; ?></td>
        <td  class="c" id="num"><?php echo $dados['outrotelf'];?></td>
        <td  class="c"><?php echo $dados['facebook']; ?></td>
        <td  class="c" id="num"><?php echo $dados['whatsapp']; ?></td>
        <td  class="c"><?php echo $dados['email']; ?></td>
        <td  class="c" id="editar"><a href="editar-inscrito.php?id=<?php echo $dados['id'];?>">Editar</a></td>
        <td  class="c" id="eliminar"><a href="model/eliminar.php?id=<?php echo $dados['id'];?>">Eliminar</a></td>
        
    </tr>
   
    <?php  }; ?>
    </thead>
</table>
</body>
</html>
<?php
?>