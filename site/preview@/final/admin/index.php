<html>
<?php include 'header-login.php' ?>
<body>
	<div id="box-login">
		<div class="box-login-painel">
			<div class="logo"></div>

			<div class="bloco">
				<form action="funcoes/verifica-login.php" method="POST" target="iAjax">
					<span>Usuário</span>
					<input type="text" name="login" id="login" required="" />
					<span>Senha</span>
					<input type="password" name="senha" id="senha" required="" />
					<input type="submit" class="btn-entrar" value="Entrar" />
				</form>
				<iframe name="iAjax"></iframe>
			</div>
			<a class="esqueci-senha" href="#this">Esqueceu sua senha ?</a>
		</div>
	</div>
</body>
</html>