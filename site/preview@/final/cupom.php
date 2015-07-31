<html>
<!-- header -->
<?php include 'header.php' ?>
<body>

		<div class="alinhamento">
			<div class="alinhamento-centro">
				<?php
					include_once "admin/funcoes/biblioteca.php";
					conexao();

					$result = mysql_query("select * from anuncios where idanuncio=".$_GET["idanuncio"]."");
					$dados = mysql_fetch_assoc($result);

					$nome     = $_POST["nome"];
					$sobrenome     = $_POST["sobrenome"];
					$email    = $_POST["email"];
					$telefone = $_POST["telefone"];
					$cpf      = $_POST["cpf"];
				?>
				<div class="cupom">
					<img src="imagens/cupom.png">
					<div class="id">ID: 999999999</div>
					<div class="nome-anuncio"><?php echo $dados["nomeanuncio"]; ?></div>
					<div class="endereco">Endereço: Lorem</div>
					<div class="cidade">Cidade: <?php echo $dados["cidade"]; ?></div>
					<div class="nome-comprador"><?php echo $nome." ".$sobrenome ?></div>
					<div class="cpf">CPF: <?php echo $cpf ?></div>
				</div>
				<a style="margin-left: 40px" href=javascript:print();>Imprimir cupom</a> 

			</div>
		</div><!-- final alinhamento -->
		
</body>
</html>