<?php
include_once "includes/header.php";
include_once "model/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title>C.E.P.O Inscrições</title>
		<style> body { background-color: rgb(15, 12, 12) ;}
	div#rostoi { width: 925px; background-color: rgb(245, 245, 245);  margin: 0px auto 0px auto; box-shadow: 1px 4px 1px 4px rgb(146, 132, 132);padding: 8px;}
	div#rostoi p {text-indent: 30px; text-align: justify;}
    div#rostoi fieldset {display: block; background-color: rgb(240, 240, 240);margin-right: 32px; margin-left: 32px;}
    div#rostoi input{ background-color: rgb(240, 240, 240); text-align: center;}
    div#rostoi select {background-color: rgb(240, 240, 240);text-align: center;}
    div#rostoi h6 {text-align: center;font-size: 20px;}
		* {padding: 0px; margin: 0px; font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
			header#cb {display: block; background-color: rgb(245, 245, 250);}
			header#cb h1{margin-top: -400px; font-size: 42pt; color: rgb(122, 110, 110);text-shadow: 1px 1px 1px  rgb(0, 0, 0);}
            header#cb h3 {font-size: 21pt; color:  rgb(70, 70, 70);}
            header#cb h5 { margin-left:2px; margin-right:2px; padding:0px; font-size: 11; color: rgb(50,50,50);border-bottom: 4px solid rgb(90, 90, 90); }
			header#cb h5:hover{font-size: 21pt; text-shadow: 1px 1px 1px  rgb(0, 0, 0); color:rgb(109, 105, 101)} 
			header#cb img {border-radius: 110px; display: block; width: 300px; margin-left: 625px; margin-bottom: 250px;}
fieldset h2 {padding: 10px;}
u{color: red; }
article#obs {text-align: justify;}
footer {text-align: center;}   
#botao {padding: 4px; border-radius: 23px; border-color: black solid; margin-left: 400px; }  
#botao:hover {background-color: green; cursor: pointer;}       
</style>
</head>
<body>
   
   <div id="rostoi">
    <header id="cb">
        <br> <br> <br>
        <img src="img\colegio.png">
             <h1>C.E.P.O Inscrições </h1> <br>
              <h3>Colégio Onilka</h3> <br> <br> <br>
             <h5>matrículas e confirmações de matrículas</h5>
        </header> <br> <br><br>
<h6>Complexo Escolar Privado Onilka <br>
    Ficha de Inscrição</h6> <br><br><br>
<p>Estas prestes a inserir os teus dados pessoais, pelo que, espera-se de ti o máximo discernimento e consideração, prenchendo todas áreas pedidas e de uma forma particular as áreas obrigatórias, caso não cumpras os requesitos pedidos nas áreas de preenchimento opcional.
    Todavia, para a melhor identificação é de todo necessário que se preencha todas as áreas.
</p> 
<br><br><br>
<p>Você chegou até aqui com a prentenção de fazer matrícula ou confirmação de matrícula.
    Agora o momento é todo teu, inser os teus dados para inscrever-se e desfrute.</p>
<br><br>
<?php 
   
   /*if (isset($_GET['id'])){
        $id = $_GET['id'];
    
        $sql = "SELECT FROM candidato WHERE candidato.id = '$id' ";
        $resultado = mysqli_query($connect, $sql);
        while($dados = $resultado->fetch_assoc()){
        

        }
        
        
        //$dados = mysqli_fetch_array($resultado);
    }*/
    /*if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = filter_input(INPUT_GET, 'id');
        $operacao = filter_input(INPUT_GET, 'operacao');
        /* validar os dados recebidos através do pedido */
        /*if (empty($id) || $operacao!="editar"){
        echo " Erro, pedido inválido ";
        exit();
        }
        }
        else{
        echo " Erro, pedido inválido ";
        exit();
        }
        $consulta = "SELECT * FROM candidato WHERE id = '$id' ";

        if (!$resultado = $connect->query($consulta)) {
            echo ' Falha na consulta: '. $ligacao->error;
            $ligacao->close();
        }
        else{
        $dados = $resultado->fetch_assoc(); */
        $id = $_GET['id'];
        $sql = "SELECT * FROM candidato WHERE id = $id";
        $consulta = mysqli_query ($connect, $sql);
        
        foreach ($consulta as $dados) {
            
       
        //$dados = mysql_fetch_array($busca);
        
?>
<form method="POST" action="model/editar.php">

<fieldset id="perfil">
    <legend><h2>Dados pessoais</h2></legend>
    <br>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
    <em> Nome <input type="text" name="nome" size="24" maxlength="50" minlength="10" placeholder="Nome Completo"  value="<?php echo $dados['nome']; ?>"></em>
    <em>Data de Nascimento <input type="date" name="nascimento" value="<?php echo $dados['nascimento']; ?>"></em>
    <em>Sexo <select name="sexo" value="<?php echo $dados['sexo']; ?>">
            <option>Masculino</option>
            <option>Feminino</option>
         </select></em><br><br>
    <em>Natural de <input type="text" name="naturalidade" size="13" maxlength="20" minlength="3" placeholder="O Município" value="<?php echo $dados['naturalidade']; ?>"></em>
    <em>Província de <input type="text" name="provincia" size="14" maxlength="20" minlength="3" placeholder="A Província" value="<?php echo $dados['provincia']; ?>"></em>
    <em>Bilhete de Identidade Nº <input type="text" name="bi" size="14" maxlength="14" minlength="14" placeholder="Número do BI" value="<?php echo $dados['bi']; ?>"></em><br><br>
    <em>Filho de <input type="text" name="pai" size="24" maxlength="50" minlength="10" placeholder="Nome do Pai" value="<?php echo $dados['pai']; ?>"> </em>
    <em>e de <input type="text" name="mae" size="24" maxlength="50" minlength="10" placeholder="Nome da Mãe" value="<?php echo $dados['mae']; ?>"></em><br><br> 
        
        
</fieldset><br>
       
<fieldset id="inscricao">
    <legend><h2>Inscrição</h2></legend>
    <br>
       Inscreve-se para: <br><br>
       <label for="sec"><em><b>Iº Cíclo Ensino Geral</b></label> <input type="radio" name="nivel" id="sec" value="Iº Cíclo Ensino Geral?<?php echo $dados['nivel']; ?>">
      </em> <br><br>
               
    <label for="medp"><em><b>IIº Cíclo Ensino Geral e Cursos T.Profissional</b></label> <input type="radio"  name="nivel" id="medp" value="IIº Cíclo Ensino Geral e Cursos T.Profissional?<?php $dados['nivel']; ?>">
       <br><br>
        Na  <select name="classe" value="<?php $dados['classe']; ?>">
                <option value=""> - </option>
                <option value="Sétima">7ª</option>
                <option value="Oitava">8ª</option>
                <option value="Nona">9ª</option>
                <option value="Décima">10ª</option>
                <option value="Décima Primeira">11ª</option>
                <option value="Décima Segunda">12ª</option>
                <option value="Décima Terceira">13ª</option>
            </select> 
        Classe Pela <select name="repete" id="repit" value="<?php $dados['repete']; ?>">
                   <option value=""> - </option>
                   <option value="Primeira vez">1ª</option>
                   <option value="Segunda vez">2ª</option>
                   <option value="Terceira vez">3º</option>
                   <option value="Quarta vez">4º</option>
                   <option value="Quinta vez">5ª</option>
                   <option value="Sexta vez">6ª</option>
               </select> vez</em> <br><br>
            <em>No curso <select name="curso" id="curso" value="<?php $dados['curso']; ?>">
                   <option value=""> - </option>
                   <option value="I Cíclo Ensino Geral">I Cíclo Ensino Geral</option>
                   <option value="Ciências Humanas">Ciências Humanas</option>
                   <option value="Direito">Ciências Económicas e Jurídicas</option>
                   <option value="Comércio">Comércio</option>
                   <option value="Contabilidade e Gestãoo">Contabilidade e Gestão</option>
                   <option value="Estatísticas e Planeamento">Estatísticas e Planeamento</option>
                   <option value="Finanças">Finanças</option>
                   <option value="Gestão Empresarial">Gestão Empresarial</option>
                   <option value="Gestão de Recursos Humano">Gestão de  Recursos Humano</option>
                   <option value="Informática">Informática</option>
                   <option value="Informática de Gestão">Informática de Gestão</option>
               </select></em><br><br>
            <em>Tipo de Inscrição: <br><br>
            <label for="provefora"><b>"Matrícula"</b></label><input type="radio" name="inscricao" value="Matrícula" id="provefora">
            <br><br>
            <label for="proveaq"><b>"Confirmação"</b></label> <input type="radio" value="Confirmação" name="inscricao" id="proveaq"> </em><br><br>      
<em>Escola de Proveniência <input type="text" name="proveniencia" id="nouresc" placeholder="Escola anterior" minlength="3" value="<?php echo $dados['proveniencia']; ?>"></em><br><br>
</fieldset><br>
       
<fieldset id="endereco">
           <legend><h2>Endereço</h2></legend>
           <br>
        <em>Município <input type="text" name="municipio" placeholder="Município" size="13" list="muni" value="<?php echo $dados['municipio']; ?>" >
    <datalist id="muni">
               <option value="Baía Farta">Baía Farta</option>
               <option value="Balombo">Balombo</option>
               <option value="Benguela">Benguela</option>
               <option value="Bocoio">Bocoio</option>
               <option value="Caimbambo">Caimbambo</option>
               <option value="Catumbela">Catumbela</option>
               <option value="Cubal">Cubal</option>
               <option value="Ganda">Ganda</option>
               <option value="Lobito">Lobito</option>
           </datalist></em>
        <em>Bairro <input type="text" name="bairro" placeholder="Bairro"  size="10" maxlength="20" minlength="3" value="<?php echo $dados['bairro']; ?>"></em>
    <em>Quarteirão/travessa/Rua <input type="text" name="rua" placeholder="Preenchimento opcional"  size="22" value="<?php echo $dados['rua']; ?>"></em><br><br>
    <em>Casa nº <input type="text" name="casa" placeholder="Número da Casa" size="14" value="<?php echo $dados['casa']; ?>"></em>
    <em>Telefone <input type="text" name="telefone" placeholder="Número  de contacto" size="18" maxlength="14" minlength="9" value="<?php echo $dados['telefone']; ?>"></em>
    <em>Outro telefone <input type="text" name="outrotelf" placeholder="Preenchimento opcional"  size="22" maxlength="14" minlength="9" value="<?php echo $dados['outrotelf']; ?>"></em> <br><br>
    <em>Facebook <input type="text" name="facebook" placeholder="Preenchimento opcional"  size="22" maxlength="50" minlength="8" value="<?php echo $dados['facebook']; ?>"></em>
    <em>WhatsApp <input type="text" name="whatsapp" placeholder="Preenchimento opcional"   size="22" maxlength="20" minlength="9" value="<?php echo $dados['whatsapp']; ?>"></em>
    <em>E-mail <input type="email" name="email" placeholder="Preenchimento opcional"  size="22" maxlength="40" minlength="8" value="<?php echo $dados['email']; ?>"></em><br><br>
           
       </fieldset><br><br>
       <p><u>Warning:</u> Tem em atenção os dados que você vai enviar para inscrição. Verifique se estão conformes e envia. Se não estiver conforme, serão enviados dados amputados.
    Se uma das áreas de preenchimento obrigatório não for preenchida, os dados não serão enviados. Tente de novo!.</p><br>
   <input type="submit" name="btn-alterar" value="Enviar Dados" id="botao"><br><br><br>
    <article id="obs">
        <p>OBS: Os serviços administrativos presenciais estão disponíveis no período compreendido entre ás 7h as 17h e 30min, de segunda à sexta-feira.</p>
</article>
       </form>
<?php
     }
?>
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