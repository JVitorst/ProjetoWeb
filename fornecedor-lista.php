<?php include("cabecalho.php"); 
include ("conecta.php");
include ("banco-fornecedor.php");?>

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"] == "true"){
    ?>
    <p class="alert-success"> Fornecedor apagado com sucesso !</p>
    <?php
}
?>

<h1>Listagem de Fornecedores</h1>
<table class  = "table  table-responsive table-hover col-md-4">
    <thead>
        <th>ID</th>
        <th>Nome/Razão Social</th>

        
        <th>Nome Fantasia</th>
        <th>CNPJ/CPF</th>
        <th>I.E.</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>Observações</th>
    </thead>
    <?php
    $fornecedores = listaFornecedores($conexao);
    foreach($fornecedores as $fornecedor):
        ?>
    <tr>
        <td><?=$fornecedor['id_forn']?> </td>
        <td><?=$fornecedor['razao_social']?>  </td>
        
        <td><?=$fornecedor['nome_fantasia']?> </td>
        <td><?=$fornecedor['cpf_cnpj']?> </td>
        <td><?=$fornecedor['ie']?> </td>
        <td><?=$fornecedor['endereco']?> </td>
        <td><?=$fornecedor['bairro']?> </td>
        <td><?=$fornecedor['cidade']?> </td>
        <td><?=$fornecedor['estado']?> </td>
        <td><?=$fornecedor['email_contato']?> </td>
        <td><?=$fornecedor['telefone']?> </td>
        <td><?=$fornecedor['celular']?> </td>
        <td><?=$fornecedor['obs']?> </td>
        
        <td class = "col-md-1" ><a href = "remove-fornecedor.php?id_forn=<?=$fornecedor['id_forn']?>" class = "text-danger">Remover<a/></td>
    </tr>
    <?php
    endforeach
    ?>
</table>


<?php include("rodape.php"); ?>