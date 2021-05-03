<?php
include_once "includes/header.php";
include_once "model/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>Consultas</title>
    <style>
        body { background-color: rgb(15, 12, 12) ;}
	div#rostoc { width: 950px; background-color: rgb(245, 245, 245);  margin: 0px auto 0px auto; box-shadow: 1px 4px 1px 4px rgb(146, 132, 132);padding: 8px;}
	div#rostoc b{color: rgb(70, 70, 70); text-align: center;}	
		* {padding: 0px; margin: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
			header#cb {display: block; background-color: rgb(245, 245, 250);}
			header#cb h1{margin-top: -400px; font-size: 42pt; color: rgb(122, 110, 110);text-shadow: 1px 1px 1px  rgb(0, 0, 0);}
            header#cb h3 {font-size: 21pt; color:  rgb(70, 70, 70);}
            header#cb h5 { margin-left:2px; margin-right:2px; padding:0px; font-size: 11; color: rgb(50,50,50);border-bottom: 4px solid rgb(90, 90, 90); }
			header#cb h5:hover{font-size: 21pt; text-shadow: 1px 1px 1px  rgb(0, 0, 0); color:rgb(109, 105, 101)} 
			header#cb img {border-radius: 110px; display: block; width: 300px; margin-left: 645px; margin-bottom: 250px;}
            fieldset {display: block;background-color: rgb(240, 240, 230); margin-left: 200px; margin-right: 200px;}
           p{text-align: justify; text-indent: 30px;}
           u{color: red; }
           h1 {padding: 20px;}
           input {margin-left: 10px;}
           em{margin-left: 50px;}
            article#obs {text-align: justify;}
            footer {text-align: center;} 

    </style>
</head>
<body>
        <div id="rostoc">
    <header id="cb">
        <br> <br> <br>
        <img src="img\colegio.png">
             <h1>C.E.P.O Inscrições </h1> <br>
              <h3>Colégio Onilka</h3> <br> <br> <br>
             <h5>Consulta de inscrição</h5>
        </header> <br> <br> <br>

    <p>Se chegou até aqui já deve ter feito a inscrição, se preencheu as áreas necessáriamente obrigatórias no layout anterior,
os seus dados deverão  aparecer aqui a qulquer momento depois da consulta. Atente que, para resulatados, mais exatos é aconselhável que se 
consulte através do número de contacto telefónico ou ainda pelo número de bilhete de identidade. Caso o resultado não estiver disponível no momento, pede-se que se aguarde um tempo e depois volte a consular, se a situação continuar
num período superior a 48 horas, entre em contacto com os serviços administrativos através dos meios conhecidos afim de dar solução, com uma consulta direta ou ainda inscrição direta
 e a consequente eliminação da tentativa mal sucedida da inscrição anterior.</p> 
<br><br><br>
<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
<fieldset> <br>
    <legend><h1>Consultar inscrição</h1></legend>
  <center><b>Número</b>  <input type="text" name="busca" placeholder="Pesquisar..."><br> <br></center>
    <p><u>Warning:</u> Procurar apartir do número de B.I ou contacto telefónico</p> <br>
    <center><button>Buscar</button><br><br></center>

</fieldset> 

</form> <br><br><br>
<?php
if ($_POST){
    $consulta = $_POST['busca'];
    $sql = "SELECT * FROM candidato WHERE bi LIKE '%$consulta%' or telefone LIKE '%$consulta%' Order By nome LIMIT 10";
    $resultado_candidato = mysqli_query($connect, $sql);
    $conta = mysqli_num_rows($resultado_candidato);

echo "<h2><font color=green>Dados da Consulta</font></h2><br>";
        while($rows_nomes = mysqli_fetch_array($resultado_candidato)){
            echo "<center><h2>Dados Pessoais e Académicos</h2></center>";
            echo "<b>Nº de Inscrição -</b> ".$rows_nomes['id']."<br>";
            echo "<b>Nome -</b> ".$rows_nomes['nome']."<br>";
            echo "<b>Data de Nascimento -</b> ".$rows_nomes['nascimento']."<br>";
            echo "<b>Naturalidade -</b> ".$rows_nomes['naturalidade']."<br>";
            echo "<b>Província -</b> ".$rows_nomes['provincia']."<br>";
            echo "<b>Pai -</b> ".$rows_nomes['pai']."<br>";
            echo "<b>Mãe -</b> ".$rows_nomes['mae']."<br>";
            echo "<b>Sexo -</b> ".$rows_nomes['sexo']."<br>";
            echo "<b>B.I nº -</b> ".$rows_nomes['bi']."<br>";
            echo "<b>Nível Académico -</b> ".$rows_nomes['nivel']."<br>";
            echo "<b>Classe -</b> ".$rows_nomes['classe']."<br>";
            echo "<b>Nº de Frequência -</b> ".$rows_nomes['repete']."<br>";
            echo "<b>Curso -</b> ".$rows_nomes['curso']."<br>";
            echo "<b>Tipo de Inscrição -</b> ".$rows_nomes['inscricao']."<br>";
            echo "<b>Escola de Proveniência -</b> ".$rows_nomes['proveniencia']."<br><br>";
           
            echo "<center><h2>Endereço de Localização e Contactos </h2></center>";
            echo "<b>Município -</b> ".$rows_nomes['municipio']."<br>";
            echo "<b>Bairro -</b> ".$rows_nomes['bairro']."<br>";
            echo "<b>Rua -</b> ".$rows_nomes['rua']."<br>";
            echo "<b>Casa -</b> ".$rows_nomes['casa']."<br>";
            echo "<b>Telefone -</b> ".$rows_nomes['telefone']."<br>";
            echo "<b>Telefone Alternativo -</b> ".$rows_nomes['outrotelf']."<br>";
            echo "<b>Facebook -</b> ".$rows_nomes['facebook']."<br>";
            echo "<b>WhatsApp -</b> ".$rows_nomes['whatsapp']."<br>";
            echo "<b>E-mail -</b> ".$rows_nomes['email']."<br>";
        }
}
?>
<br><br><br><br><br><br>
<b>Agora, está tudo pronto para começar as aulas e ter novas experiências, aproveite!</b>



<br><br><br>
<article id="obs">
    <p>OBS: Os serviços administrativos presenciais estão disponíveis no período compreendido entre ás 7h as 17h e 30min, de segunda à sexta-feira.</p>
</article>
   
   <br><br><br>
   <footer>Colégio Onilka <br> <i>desde 2015</i> <br> Contribuinte número 21 12 04 33 31 <br>
Loc. Lobito, Alto-Esperaça à 200 da EN 100  </footer>
<br><br>

</div>
</body>
</html>


<?php
include_once "includes/footer.php";
?>