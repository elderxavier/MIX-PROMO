<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<div class="conteudo-centro">
			<div id="painel">
				<div class="box">
					<div class="acesso-rapido">
						<h3>Bem-vindo ao Painel Adminisrativo!</h3>
						<p>Reunimos algumas ações rápidas para começar:</p>

						<a href="campanhas.php">Publicar uma Campanha</a>
						<a href="campanhas.php">Publicar uma Oferta do dia</a>
						<a href="slide.php">Publicar Slide</a>
					</div>
					<div class="info-rapida">
						<h4>Atividades Recentes</h4>

						<?php include 'funcoes/biblioteca.php'; atividades_recentes(); ?>
					</div>
				</div>
				<div class="box-2">
					<div class="estatisticas">
						<h4>Estátisticas</h4>

						<img src="imagens/img-estatistica.png"
					</div>
				</div>
			</div>
		</div>

	</div><!-- conteudo -->


	<!-- footer -->
	<div id="footer">
		<img src="imagens/logo-footer.png">
	</div>
</body>
</html>