<?php include("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
include ("banco-categoria.php");?>
<?php
$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('importado', $_POST)){
    $importado = "true";
}else{
    $importado = "false";
}


     // abre a conecção no mysql - devolve a conexão com o banco de dados

if(alteraProduto($conexao,$id, $nome, $preco, $descricao, $categoria_id, $importado)){ // verifica se a inserção foi completa
    ?><!-- Se sim, exibe a mensagem abaixo -->
    <p class="text-success">Produto <?= $nome; ?>,<?= $preco?> alterado com sucesso!</p>
    <?php }else{
        $msg=mysqli_error($conexao);
        ?>
        <!-- Se nao, exibe a mensagem abaixo -->
        <p class="text-danger">Produto <?= $nome; ?> não foi alterado com sucesso: <?= $msg ?></p>
        <?php
    }
    ?>
    <?php include("rodape.php"); ?>