<html>
<!-- header -->
<?php include 'header.php' ?>
<body>
		<!-- topo -->
		<?php include 'topo.php' ?>

		<div class="alinhamento">
			<div class="alinhamento-centro">
				<!-- conteudo -->
				<div class="conteudo">

					<!-- categorias -->
					<?php include 'categorias.php' ?>

					<img src="imagens/bg-instrucao.png" style="width: 100%">

					<div class="barra">
						<h1>Sua oferta</h1>
					</div>

					<?php
						include_once "admin/funcoes/biblioteca.php";
						conexao();

						$result = mysql_query("select * from anuncios where idanuncio=".$_GET["idanuncio"]."");
						$dados = mysql_fetch_assoc($result);
					?>

					<div class="box-adquiriroferta">
						<?php echo '<img src="admin/uploads/'.$dados["imgdestaque"].'"> ';  ?>
						<div class="nome-oferta"><h2><?php echo $dados["nomeanuncio"] ?></h2></div>
						<div class="regulamento">Consultar Regulamento</a></div>
					</div>

					<div class="barra">
						<h1>informações</h1>
					</div>

					<div class="box-adquiriroferta-form">
						<form action="cupom.php?idanuncio=<?php echo $dados["idanuncio"] ?>" method="POST" target="_blank">
							<p>Nome*:</p>
							<input name="nome" class="inputAnuncie" type="text" required="" />
							<p>Sobrenome*:</p>
							<input name="sobrenome" class="inputAnuncie" type="text" required="" />
							<p>E-mail*:</p>
							<input name="email" class="inputAnuncie" type="text" required="" />
							<p>Telefone:</p>
							<input name="telefone" class="inputAnuncie mask-fone" type="text" />
							<p>CPF*:</p>
							<input name="cpf" class="inputAnuncie" type="text" required="" />
						
							<hr style="width: 100%; float: left; margin-top: 15px"/>

							<div class="total">Total</div>
							<div class="preco">R$ <?php echo $dados["valornovo"]; ?></div>


							<div class="regulamento">*Ao gerar o cupom, você concorda com os termos de uso.</a></div>
							<input type="submit" value="gerar cupom" />
						</form>

					</div>
					
					<div class="barra">
						<h1>por que me cadastrar?</h1>
					</div>
					<div class="porque-me-cadastrar">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh sit amet ligula pulvinar auctor ut ac nisi. Aliquam ut eros nibh. Duis in turpis felis. Proin placerat suscipit nisi, quis vulputate mauris convallis et. Sed porttitor turpis in nisi faucibus gravida. Sed est tortor, pellentesque vitae luctus nec, mollis ut leo. Aliquam tempor urna sed nisi condimentum accumsan. Vivamus ullamcorper ultrices dolor vitae bibendum. Proin placerat suscipit nisi, quis vulputate mauris convallis et. Sed porttitor turpis in nisi faucibus gravida. Sed est tortor, pellentesque vitae luctus nec, mollis ut leo. Aliquam tempor urna sed nisi condimentum accumsan. Vivamus ullamcorper ultrices dolor vitae bibendum.
					</div>
				

		      <!-- menu footer -->
					<?php include 'menu-footer.php' ?>
					

				</div><!-- final conteudo -->
			</div>
		</div><!-- final alinhamento -->


		<!-- footer -->
		<?php include 'footer.php' ?>
		
</body>
</html>