<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");
?>
<h1>Categoria</h1>
<form action="adiciona-categoria.php" method="post">
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td>
				<input class="form-control" type="text" name="nome" placeholder="Nome">
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