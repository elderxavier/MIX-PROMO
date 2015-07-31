<html>
<?php include 'header.php' ?>
<body>
	<script src="ckeditor/ckeditor.js"></script>

	<!-- modal overlay --> 
	<div class="modal-overlay"></div>
	<!-- final modal overlay -->
	<div id="conteudo">
		<!-- topo -->
		<?php include 'topo.php' ?>
		<!-- final topo -->


		<!-- menu lateral -->
		<?php include 'menu-lateral.php' ?>
		<!-- final menu lateral -->
		
		<!-- conteudo -->
		<div id="conteudo-interno">
			<h1>Adcionar novo anúncio</h1><a href="anuncios.php" class="btn-anuncio">Anúncios</a>

			<!-- form -->
			<form class="novo-anuncio" action="funcoes/add-anuncio.php" enctype="multipart/form-data" method="POST" target="iAjax">
				<input class="campo" type="text" name="nomeAnuncio" id="nomeAnuncio" placeholder="Digite o título aqui" required="" />
				<div class="valor-text">Valor antigo:</div><input class="valor" type="text" name="valorAntigoAnuncio" id="valorAntigoAnuncio" required="" placeholder="Ex: 130,00" />

				<div class="valor-text">Valor:</div><input class="valor" type="text" name="valorAnuncio" id="valorAnuncio" required="" placeholder="Ex: 99,00" />

				<div class="informacoes">Informações:</div>
				<div class="regulamento">Regulamento:</div>
				<div class="box-textarea"><textarea name="infoAnuncio" id="editor1" placeholder="Informações sobre a oferta."></textarea></div>
				<div class="box-textarea-2"><textarea name="regtoAnuncio" id="editor2" placeholder="Regulamento sobre a oferta."></textarea></div>

				<div class="sobre-anunciante-txt">Sobre o anunciante:</div>
				<div class="box-textarea-3"><textarea name="sobreAnunciante" id="editor3" placeholder="Informações sobre o anunciante."></textarea></div>

				<div class="btn-imagem-destacada">Inserir uma imagem destacada</div>

				<!-- modal -->
				<div class="modal">
					<div class="close"></div>
					<img id="preview_image" alt="" src="" > <br>
						<input type="file" name="files" id="files" onchange="preview(this);">
				</div>
				<!-- final modal -->
				<input type="submit" class="btn-add-anuncio" value="Adcionar Anúncio" />
			</form>
			<iframe name="iAjax" style="display: none;"></iframe>
		</div>
	</div>
	<script>

			// Replace the <textarea id="editor"> with an CKEditor
			// instance, using default configurations.
			CKEDITOR.replace( 'editor1', {
				uiColor: '#cecece',
				toolbar: [
					[ 'Source', 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

			CKEDITOR.replace( 'editor2', {
				uiColor: '#cecece',
				toolbar: [
					[ 'Source', 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

			CKEDITOR.replace( 'editor3', {
				uiColor: '#cecece',
				toolbar: [
					[ 'Source', 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

		</script>
</body>
</html>