<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
include ("logica-usuario.php");
include ("banco-produto.php");

verificaUsuario();

$categorias  = listaCategorias($conexao);

?>
<h1>Formulario de Produto</h1>
<form action="adiciona-produto.php" method="post">
    <table class="table">
        <tr>
            <td>ID:</td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td>Nome:</td>
            <td>
                <input class="form-control" type="text" name="nome" placeholder="Nome">
            </td>
        </tr>

        <tr>
            <td>Preco:</td>
            <td>
             <input type="money_format" class="form-control" data-mask="R$99" name="preco" placeholder="Preco">

         </td>
     </tr>
     <tr>
        <td>Quantidade:</td>
        <td>
         <input type="number" class="form-control"  name="quantidade" 
         placeholder="Quantidade">

     </td>
 </tr>
 <tr>
    <td>Categoria</td>
    <td>
        <select name="categoria_id" class="form-control">
            <?php foreach ($categorias as $categoria) :?>
                <option value="<?=$categoria['id']?> ">
                    <?= $categoria ['nome']?>
                </option>
            <?php endforeach?>
        </select>
        <td>
            <button type = "button" class="btn btn-primary" 
            onclick = document.location.href= "categoria.formulario.php">Nova</button>
        </td>

    </td>



</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="importado" value="true"> Importado </td>
</tr>
<tr>
    <td>Descrição:</td>
    <td>
        <textarea class="form-control" type="text" name="descricao" placeholder="Descrição"></textarea>
    </td>
</tr>

<tr>
    <td>
        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </td>
</tr>
</table>
</form>

<?php include("rodape.php"); ?>