<?php include("cabecalho.php");
include ("conecta.php");
include ("banco-fornecedor.php");


$id = $_GET['id_forn'];
removeFornecedor($conexao, $id_forn);
header("Location: fornecedor-lista.php?removido=true");
die();
?>