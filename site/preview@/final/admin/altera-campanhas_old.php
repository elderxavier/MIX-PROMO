<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<?php include 'funcoes/biblioteca.php';
			conexao();

			$conexao = mysql_query("SELECT * FROM anuncios WHERE idanuncio=".$_GET["idanuncio"]."");
			$dados = mysql_fetch_assoc($conexao);
		?>

		<div class="conteudo-centro">
			<div id="barra-lateral">
				<div class="barra-com-seta"></div>

				<ul class="menu-lateral-interno">
					<a href="campanhas.php"><li class="primeira-li">Nova Campanha</li>
					<a href="listagem-campanhas.php"><li>Todas Campanhas</li></a>
					<li class="ultima-li">Status Campanhas</li>
				</ul>

				<div class="box-barra-lateral">
					<p>Campanhas cadastradas:<span> 180</span></p>
				</div>

				<div class="box-barra-lateral">
					<p>Clientes cadastrados:<span> 120</span></p>
				</div>

				<div class="calendario">
					<div id="datepicker"></div>
				</div>
			</div>

			<div class="conteudo-interno">
				<h1>Campanhas</h1><h2>Alterar Campanha</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				<div class="box-conteudo-interno">
					<form class="nova-campanha" action="funcoes/alt-anuncio.php?idanuncio=<?php echo $_GET["idanuncio"] ?>" enctype="multipart/form-data" method="POST" target="iAjax">
					<input class="campo" type="text" name="nomeCampanha" id="nomeCampanha" placeholder="Digite o título aqui" required="" value="<?php echo $dados["nomeanuncio"] ?>" />
					<div class="valor-text-1">Valor antigo:</div>
					<div class="valor-text-2">Valor:</div>
					<div class="valor-text-3">Desconto:</div>
					<div class="valor-text-4">Vencimento da campanha:</div>
					<input class="valor-1" type="text" name="valorAntigoCampanha" id="valorAntigoCampanha" required="" placeholder="Ex: 130,00" value="<?php echo $dados["valorantigo"] ?>" />
					<input class="valor-2" type="text" name="valorCampanha" id="valorCampanha" required="" placeholder="Ex: 99,00" value="<?php echo $dados["valornovo"] ?>" />
					<input class="valor-3" type="text" name="desconto" id="desconto" required="" placeholder="Ex: 80%"  value="<?php echo $dados["desconto"] ?>"/>
					<input class="valor-4" type="text" name="vencimentoCampanha" id="vencimentoCampanha" required="" placeholder="99/99/9999" value="<?php echo $dados["vencimentoanuncio"] ?>" />

					<div class="informacoes">Informações:</div>
					<div class="regulamento">Regulamento:</div>
					<div class="box-textarea"><textarea name="infoCampanha" id="editor1" placeholder="Informações sobre a oferta."><?php echo $dados["infoanuncio"] ?></textarea></div>
					<div class="box-textarea-2"><textarea name="regtoCampanha" id="editor2" placeholder="Regulamento sobre a oferta."><?php echo $dados["regulamentoanuncio"] ?></textarea></div>

					<div class="sobre-anunciante-txt">Sobre o anunciante:</div>
					<div class="box-textarea-3"><textarea name="sobreAnunciante" id="editor3" placeholder="Informações sobre o anunciante."><?php echo $dados["sobreanunciante"] ?></textarea></div>

					<div style="width: 332px; min-height: 300px; float: right; margin: -20px 0 0 0">
						<div class="logo-anunciante">Logo anunciante</div>
						<img id="preview_image" alt="" src="uploads/<?php echo $dados["logoanunciante"] ?>" >
						<div class="upload">Upload
							<input class="upload-campanhas" type="file" name="logoAnunciante" id="files" onchange="preview(this);" >
						</div>

						<div class="desc-anunciante">Descrição anunciante:</div>
						<div class="box-textarea"><textarea name="descAnunciante" id="editor5"><?php echo $dados["dadosanunciante"] ?>
						</textarea></div>

						<div class="imagem-destacada">Imagem destacada</div>
						<img id="preview_image_2" alt="" src="uploads/<?php echo $dados["imgdestaque"] ?>" >
						<div class="upload">Upload
							<input class="upload-campanhas" type="file" name="files" id="files" onchange="preview_2(this);" >
						</div>
					</div>

					<div class="localizacao">Localização</div>
					<div class="box-textarea-4"><textarea name="localizacao" id="editor4"></textarea></div>
					<div style="width: 100%" class="localizacao">Nome local:</div>
					<div class="box-textarea-4"><input style="width: 100%; margin-top: 0;" class="valor-1" type="text" name="nomeLocal" id="nomeLocal" required="" placeholder="Ex: Guará, Brásilia" value="<?php echo $dados["localanuncio"] ?>" /></div>

					<div class="divide"></div>
					<br/><br/>
					<hr style="width: 100%; float: left; margin-top: 30px; opacity: 0.3; -webkit-opacity: 0.3; -moz-opacity: 0.3; -o-opacity: 0.3;"/>
					<br/>


					<?php
						conexao();

						$conexao2 = mysql_query("SELECT * FROM slideanuncio WHERE idanuncio=".$_GET["idanuncio"]."");
						$dados2 = mysql_fetch_assoc($conexao2);
					?>


					<!-- slide camapnha -->
					<div class="slide-campanha">
						<div class="slide-title">Slide Campanha</div>
						<!-- slide 1 -->
						<img id="preview_slide_campanha_1" alt="" src="uploads/<?php echo $dados2["slide1"] ?>" >
						<div class="upload">Slide 1
							<input class="upload-campanhas" type="file" name="slide1Campanha" id="files" onchange="preview_slide_campanha_um(this);" >
						</div>
						<!-- slide 2 -->
						<img id="preview_slide_campanha_2" alt="" src="uploads/<?php echo $dados2["slide2"] ?>" >
						<div class="upload">Slide 2
							<input class="upload-campanhas" type="file" name="slide2Campanha" id="files" onchange="preview_slide_campanha_dois(this);" >
						</div>
						<!-- slide 3 -->
						<img id="preview_slide_campanha_3" alt="" src="uploads/<?php echo $dados2["slide3"] ?>" >
						<div class="upload">Slide 3
							<input class="upload-campanhas" type="file" name="slide3Campanha" id="files" onchange="preview_slide_campanha_tres(this);" >
						</div>
					</div>

					<div class="divide"></div>

					<input type="submit" class="btn-add-campanha" value="Alterar Anúncio" />
				</form>
				<iframe name="iAjax" style="display: none;"></iframe>
				</div>
			</div>


		</div>
	</div>

	<!-- footer -->
	<div id="footer">
		<img src="imagens/logo-footer.png">
	</div>
</body>

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

			CKEDITOR.replace( 'editor4', {
				uiColor: '#cecece',
				toolbar: [
					[ 'wenzgmap'],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

			CKEDITOR.replace( 'editor5', {
				uiColor: '#cecece',
				toolbar: [
					[ 'Source', 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

		</script>
</html>