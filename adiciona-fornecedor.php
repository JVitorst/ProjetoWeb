<?php include("cabecalho.php");
include ("conecta.php");
include ("banco-fornecedor.php");?>

<?php

$razao_social = $_GET["razao_social"];
$nome_fantasia = $_GET["nome_fantasia"];
$cpf_cnpj = $_GET["cpf_cnpj"];
$ie = $_GET["ie"];
$endereco = $_GET["endereco"];
$bairro = $_GET["bairro"];
$cidade = $_GET["cidade"];
$estado = $_GET["estado"];
$email_contato = $_GET["email_contato"];
$telefone = $_GET["telefone"];
$celular = $_GET["celular"];
$obs = $_GET["obs"];
     // abre a conecção no mysql - devolve a conexão com o banco de dados

if(insereFornecedor($conexao, $razao_social, $nome_fantasia, $cpf_cnpj, $ie, $endereco, $bairro, $cidade, $estado, $email_contato, $telefone, $celular, $obs)){ // verifica se a inserção foi completa
    ?><!-- Se sim, exibe a mensagem abaixo -->
    <p class="text-success">Fornecedor: <?= $razao_social; ?>,Nome Fantasia: <?= $nome_fantasia?> adicionado sucesso!</p>
    <?php }else{
        $msg=mysqli_error($conexao);
        ?>
        <!-- Se nao, exibe a mensagem abaixo -->
        <p class="text-danger">Produto <?= $nome_fantasia; ?> não foi registrado com sucesso: <?= $msg ?></p>
        <?php
    }
    ?>

    <?php include("rodape.php"); ?>
