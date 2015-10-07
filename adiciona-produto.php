<?php include("cabecalho.php");
include ("conecta.php");
include ("banco-produto.php");
include ("banco-categoria.php");
include ("logica-usuario.php");


verificaUsuario();

?>
<?php
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists('importado', $_POST)){
    $importado = "true";
}else{
    $importado = "false";
}


     // abre a conecção no mysql - devolve a conexão com o banco de dados

if(insereProduto($conexao, $nome, $preco, $quantidade, $descricao, $categoria_id, $importado)){ // verifica se a inserção foi completa
    ?><!-- Se sim, exibe a mensagem abaixo -->
    <p class="text-success">Produto <?= $nome; ?>,<?= $preco?> adicionado sucesso!</p>
    <?php }else{
        $msg=mysqli_error($conexao);
        ?>
        <!-- Se nao, exibe a mensagem abaixo -->
        <p class="text-danger">Produto <?= $nome; ?> não foi registrado com sucesso: <?= $msg ?></p>
        <?php
    }
    ?>
    <?php include("rodape.php"); ?>