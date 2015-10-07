<?php
function listaProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id = p.categoria_id");
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);     
    }
    return $produtos;
}

function insereProduto ($conexao, $nome, $preco, $quantidade, $descricao, $categoria_id, $importado){

    $query = "insert into produtos (nome, preco, quantidade, descricao, categoria_id, importado) 
    values('{$nome}', '{$preco}', '{$quantidade}','{$descricao}', '{$categoria_id}', {$importado})"; //codigo para setar onde os  dados serao inseridos
    
    return  mysqli_query($conexao, $query);
}

function buscaProduto ($conexao, $id){
    $query = "select *  from produtos where id =  {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraProduto ($conexao, $id,  $nome, $preco, $quantidade, $descricao, $categoria_id, $importado){
    $query = "update produtos set nome = '{$nome}', preco = '{$preco}', quantidade = '{$quantidade}', descricao = '{$descricao}',
 categoria_id = {$categoria_id} , importado = {$importado} where id = '{$id}' "; //codigo para setar onde os  dados serao inseridos
 return  mysqli_query($conexao, $query);

}

function removeProduto ($conexao, $id){
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}