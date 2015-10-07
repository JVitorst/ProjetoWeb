<?php

   function listaFornecedores($conexao){
    $fornecedores = array();
    $resultado = mysqli_query($conexao, "select * from fornecedores");
    while($fornecedor = mysqli_fetch_assoc($resultado)){
        array_push($fornecedores, $fornecedor);     
    }
 return $fornecedores;
}

function insereFornecedor ($conexao, $razao_social, $nome_fantasia, $cpf_cnpj, $ie, $endereco, $bairro, $cidade, $estado, $email_contato, $telefone, $celular, $obs){
    
    $query = " insert into fornecedores (razao_social, nome_fantasia, cpf_cnpj, ie, endereco, bairro, cidade, estado, email_contato, telefone, celular, obs) values('{$razao_social}', '{$nome_fantasia}', '{$cpf_cnpj}'
, '{$ie}', '{$endereco}', '{$bairro}', '{$cidade}', '{$estado}', '{$email_contato}', '{$telefone}', '{$celular}', '{$obs}')"; 
//codigo para setar onde os       dados serao inseridos
    return  mysqli_query($conexao, $query);
}

function removeFornecedor ($conexao, $id_forn){
    $query = "delete from produtos where id = {$id_forn}";
    return mysqli_query($conexao, $query);
}