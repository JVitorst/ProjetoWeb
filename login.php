<?php 
include ("conecta.php");
include ("banco-usuario.php");
include ("logica-usuario.php");

$usuario =  buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == NULL){
	
	header("Location:inicio.php?login=0"); 
} else {
	logaUsuario($usuario["email"]);
	header("Location:inicio.php?login=1");
}
die();
