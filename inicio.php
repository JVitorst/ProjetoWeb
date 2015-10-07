<?php include("cabecalho.php"); 
include ("logica-usuario.php");?>


<?php if (isset($_GET["login"]) && $_GET["login"] == true) { ;?>
<p class="alert-success">Logado com sucesso</a>
	<?php }?>

	<?php if (isset($_GET["login"]) && $_GET["login"] == false) { ;?>
	<p class="alert-danger">Usuario ou senha invalida !</a>
		<?php }?>  

		<?php if (isset($_GET["falhaDeSegurança"]) && $_GET["falhaDeSegurança"] == true) { ;?>
		<p class="alert-danger">Você não tem acesso a esta funcionalidade!</a>
			<?php }?> 

			<h1>Bem vindo ao SiStok !</h1>

			<?php if(usuarioEstaLogado()) { ?>
			<p class="text-success"> Você está logado como 
				<?= usuarioLogado()?>.</p>
				<?php } else { ?>
				<h3>Entre com seu email e senha</h3>
				<form action="login.php" method="post">
					<table class="table">
						<tr>
							<td>Email:</td>
							<td><input class="form-control" type="email" name="email" id="email" ></td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><input class="form-control" type="password" name="senha" id="senha"></td>
						</tr>
						<tr>
							<td><button  class="btn btn-primary">Submit</button></td>
						</tr>
					</table>
				</form> 
				<?php } ?>

				<?php include("rodape.php"); ?>