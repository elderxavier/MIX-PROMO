<html>
<!-- header -->
<?php include 'header.php' ?>
<style type="text/css">
	ol.bjqs-markers{width: 700px!important;}
</style>
<body>
		<!-- topo -->
		<?php include 'topo.php' ?>

		<div class="alinhamento">
			<div class="alinhamento-centro">
				<!-- conteudo -->
				<div class="conteudo">

					<!-- categorias -->
					<?php include 'categorias.php' ?>

					<?php lista_anuncio_interno(); ?>

					<!-- outras ofertas -->
					<div class="barra-mais-recentes">
						<h1>outras ofertas</h1>
					</div><!-- final outras ofertas -->
		      		<?php lista_outros_anuncios_interna(); ?>
		      

		      <!-- barra facebook -->
		      <div class="barra-facebook"></div>

		      <!-- facebook -->
		      <div class="facebook"></div>

		      <!-- menu footer -->
					<?php include 'menu-footer.php' ?>

				</div><!-- final conteudo -->
			</div>
		</div><!-- final alinhamento -->


		<!-- footer -->
		<?php include 'footer.php' ?>
		
</body>
</html>