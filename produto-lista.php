<?php include("cabecalho.php"); 
include ("conecta.php");
include ("banco-produto.php");?>

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == true){
    ?>
    <p class="alert-success"> Produto apagado com sucesso !</p>
    <?php
}
?>

<h1>Listagem de Produtos</h1>
<table class  = "table  table-responsive table-hover col-md-4" border="0">
    <thead>

        <th>Nome</th>
        <th>Produto</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Quantidade</th>
    </thead>
    <?php
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto):
        ?>
    <tr>

        <td ><?=$produto['nome']?>  </td>
        <td ><?=$produto['preco']?> </td>
        <td><?=$produto['descricao']?> </td>
        <td><?=$produto['categoria_nome']?> </td>
        <td><?=$produto['quantidade']?> </td>
        <td  class="col-md-1"type = "hidden" ><a class="btn btn-primary" href="altera-produto-formulario.php?id=<?=$produto['id']?>">
            <span class="glyphicon glyphicon-refresh"></span> ALTERAR</a></td>
            <td class = "col-md-1" border = "0" >
             <form action="remove-produto.php" method  = "post">
                 <input type="hidden" name="id" value="<?=$produto['id']?>">
                 <button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> REMOVER</button>
             </form>
         </td>


     </tr>
     <?php
     endforeach
     ?>
 </table>


 <?php include("rodape.php"); ?>