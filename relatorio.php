<?php include("cabecalho.php"); 
include ("conecta.php");
include ("banco-produto.php");?>
<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

//Query simples para busca dos dados
$busca = mysqli_query("SELECT * FROM produtos WHERE id = '$id'")or die(mysql_error());
//VerificaÃ§Ã£o das linhas encontradas.

$ver = mysqli_fetch_array($busca);
?>
<?php
$html='
<html>
<style type="text/css">
	hr {
		border: 2px solid #39F;
	}
	.textos {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 13px;
		line-height: 18px;
		color: #333;
	}
	td {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 13px;
		line-height: 18px;
		color: #09F;
	}
	body {
		font-family: Calibri;
	}
#dados {
	font-family: Calibri;
	font-size: 16px;
}
h2 {
	font-family: Calibri;
	color: #09F;
}
</style>
<body>
	';

	$html.='<table width="657" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="384"><strong>Informações de Cliente/Empresa: </strong> '.$ver['cli_empresa'].'<br />
			<span class="textos"><strong>Data de Cadastro:</strong> '.$ver['cli_datacad'].'</span><br />
			<span class="textos"><strong>CNPJ:</strong> '.$ver['cli_cnpj'].'</span><span class="textos"><strong> IE:</strong> '.$ver['cli_ie'].'</span><br />
			<span class="textos"><strong>Emissão:</strong> '.date('d/m/Y').' </span></td>
			<td width="52" align="right"><img src="exemplo.jpg" width="230" height="70"></td>
		</tr>
	</table>
	<hr />
	<h2>Ficha Cadastral</h2>
	<div id="dados">
		<p><strong>Responsável:</strong> '.$ver['cli_responsavel'].'</p>
		<p><strong>Endereço:</strong> '.$ver['cli_endereco'].'</p>
		<p><strong>Cidade:</strong> '.$ver['cli_cidade'].' <strong>UF:</strong> '.$ver['cli_uf'].'</p>
		<p><strong>Email:</strong> '.$ver['cli_email'].'</p>
		<p><strong>Situação:</strong> '.$ver['cli_situacao'].'</p>
		<p><strong>Data de Nascimento: </strong>'.$ver['cli_dtnascimento'].'</p>
		<p><strong>Tel:</strong> '.$ver['cli_tel'].' <strong>e/ou</strong> '.$ver['cli_tel_resp'].'</p>
		<p><strong>CEP:</strong>'.$ver['cli_cep'].'</p>
	</div>
	<hr />
	<p class="textos">Empresa tal bla bla bla - Todos os Direitos Reservados.<br>
		Aplicações Especiais PHP - Alaerte Gabriel
	</p>
</body>
</html>';
?>
<?php
mysql_free_result($busca);

//Aqui nós chamamos a class do dompdf
require_once('dompdf/dompdf_config.inc.php');

//É fundamental definir o TIMEZONE de nossa região para que não tenhamos problemas com a geração.
date_default_timezone_set('America/Sao_Paulo');

//Aqui eu estou decodificando o tipo de charset do documento, para evitar erros nos acentos das letras e etc.
$html = utf8_decode($html);

//Instanciamos a class do dompdf para o processo
$dompdf= new DOMPDF();

//Aqui nós damos um LOAD (carregamos) todos os nossos dados e formatações para geração do PDF
$dompdf->load_html($html);

//Aqui nós damos início ao processo de exportação (renderizar)
$dompdf->render();

//por final forçamos o download do documento, coloquei a nomenclatura com a data e mais um string no final.
$dompdf->stream(date('d/m/Y').'_cliente.pdf');
?>