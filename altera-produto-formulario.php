<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");
$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias  = listaCategorias($conexao);
$importado = $produto [ 'importado'] ? "checked = 'checked'" : "";
?>
<h1>Alterando Produto</h1>
<form action="alterar-produto.php" method="post">
    <input type="text" name="id" value="<?=$produto['id']?>">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td>
                <input class="form-control" type="text" name="nome" 
                value="<?=$produto['nome']?>" placeholder="Nome">
            </td>
        </tr>
        <tr>
            <td>Preco:</td>
            <td>
             <input type="money_format" class="form-control" data-mask="R$99" name="preco"
             value= "<?=$produto['preco']?>" placeholder="Preco">

         </td>
     </tr>
     <tr>
        <td>Categoria</td>
        <td>
            <select name="categoria_id" class="form-control">
                <?php foreach ($categorias as $categoria) :
                $CategoriaSelecionada = $produto['categoria_id'] == $categoria['id'];
                $selecao = $CategoriaSelecionada ? "selected = 'selected'" : "";
                ?>
                <option value="<?=$categoria['id']?> "<?=$selecao?>>
                    <?= $categoria ['nome']?>
                </option>
            <?php endforeach?>
        </select>
    </td>



</tr>
<tr>
    <td>Descrição:</td>
    <td>
        <textarea class="form-control" type="text" name="descricao" placeholder="Descrição"><?=$produto['descricao']?></textarea>
    </td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="importado" <?=$importado?> value="true">Importado </td>
</tr>
<tr>
    <td>
        <button class="btn btn-primary" type="submit"> <span class="glyphicon glyphicon-refresh"></span> Alterar</button>
    </td>
</tr>
</table>
</form>

<?php include("rodape.php"); ?>