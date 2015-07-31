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

					<div class="barra">
						<h1>Fale Conosco</h1>
					</div>

					<!-- box fale-conosco -->
					<div id="fale-conosco">

						<div class="icon-fale-conosco">
							<img src="imagens/ico-anuncie.png" />
						</div>

						<form action="enviar.php" method="POST" target="iAjax">
							<div class="box-fale-conosco">
								<p>Nome:</p>
								<input class="input-fale-conosco" name="nome" id="nome" type="text" required="" />
								<p>Telefone:</p>
								<input class="input-fale-conosco" name="telefone" id="telefone" type="text" required="" />
								<p>E-mail:</p>
								<input class="input-fale-conosco" name="email" id="email" type="text" required="" />
								<p>Assunto:</p>
								<input class="input-fale-conosco" name="assunto" id="assunto" type="text" required="" />
								<p>Mensagem:</p>
								<textarea class="textarea-fale-conosco" name="mensagem" id="mensagem" required=""></textarea>
							</div>
							<div style="width: 100%; float: left"></div>
							<input type="submit" value="ENVIAR" class="btn-fale-conosco" />	
						</form>
							<iframe style="display: none;" name="iAjax"></iframe>


						<div class="barra">
							<h1>por que me cadastrar?</h1>
						</div>
						<div class="porque-me-cadastrar">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh sit amet ligula pulvinar auctor ut ac nisi. Aliquam ut eros nibh. Duis in turpis felis. Proin placerat suscipit nisi, quis vulputate mauris convallis et. Sed porttitor turpis in nisi faucibus gravida. Sed est tortor, pellentesque vitae luctus nec, mollis ut leo. Aliquam tempor urna sed nisi condimentum accumsan. Vivamus ullamcorper ultrices dolor vitae bibendum. Proin placerat suscipit nisi, quis vulputate mauris convallis et. Sed porttitor turpis in nisi faucibus gravida. Sed est tortor, pellentesque vitae luctus nec, mollis ut leo. Aliquam tempor urna sed nisi condimentum accumsan. Vivamus ullamcorper ultrices dolor vitae bibendum.
						</div>
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