<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<?php include 'funcoes/biblioteca.php';
			conexao();

			$result = mysql_query("SELECT * FROM anuncios WHERE idanuncio=".$_GET["idanuncio"]."");
			$dados = mysql_fetch_assoc($result);
		?>

		<div class="conteudo-centro">
			<div id="barra-lateral">
				<div class="barra-com-seta"></div>

				<ul class="menu-lateral-interno">
					<a href="campanhas.php"><li class="primeira-li">Nova Campanha</li>
					<a href="listagem-campanhas.php"><li class="ultima-li">Todas Campanhas</li></a>
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
				<h1>Campanhas</h1><h2>Altera Campanha</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				<div class="box-conteudo-interno">
					<form class="nova-campanha" action="funcoes/alt-anuncio.php?idanuncio=<?php echo $_GET["idanuncio"] ?>" enctype="multipart/form-data" method="POST" target="iAjax">
					<input class="campo" type="text" name="nomeCampanha" id="nomeCampanha" placeholder="Digite o título aqui" required="" value="<?php echo $dados["nomeanuncio"] ?>" />
					<div class="text-ofertadodia">Oferta do dia:</div>
					<div class="valor-text-1">Valor antigo:</div>
					<div class="valor-text-2">Valor:</div>
					<!--<div class="valor-text-3">Desconto:</div>-->
					<div class="valor-text-4">Vencimento da campanha:</div>

					<select name="ofertadodia" class="valor-1" style="margin-right: 10px">
							<option value="<?php echo $dados["ofertadodia"] ?>"><?php echo $dados["ofertadodia"] ?></option>
							<option value="Não">Não</option>
							<option value="Sim">Sim</option>
						</select>
					<input class="valor-1" type="text" name="valorAntigoCampanha" id="valorAntigoCampanha" required="" placeholder="Ex: 130,00" value="<?php echo $dados["valorantigo"] ?>" />
					<input class="valor-2" type="text" name="valorCampanha" id="valorCampanha" required="" placeholder="Ex: 99,00" value="<?php echo $dados["valornovo"] ?>" />
					<!--<input class="valor-3" type="text" name="desconto" id="desconto" required="" placeholder="Ex: 80%" />-->
					<input class="valor-4" type="text" name="vencimentoCampanha" id="vencimentoCampanha" required="" placeholder="99/99/9999" value="<?php echo $dados["vencimentoanuncio"] ?>" />

					<div class="informacoes">Informações:</div>
					<div class="regulamento">Regulamento:</div>
					<div class="box-textarea"><textarea name="infoCampanha" id="editor1" ><?php echo $dados["infoanuncio"] ?></textarea></div>
					<div class="box-textarea-2"><textarea name="regtoCampanha" id="editor2"><?php echo $dados["regulamentoanuncio"] ?></textarea></div>

					<div class="sobre-anunciante-txt">Sobre o anunciante:</div>
					<div class="box-textarea-3"><textarea name="sobreAnunciante" id="editor3" ><?php echo $dados["sobreanunciante"] ?></textarea></div>

					<div style="width: 332px; min-height: 300px; float: right; margin: -20px 0 0 0">
						<div class="logo-anunciante">Logo anunciante</div>
						<div style="width: 100%; text-align: center; float: left;">
							<img id="preview_image" alt="" src="uploads/<?php echo $dados["logoanunciante"] ?>" >
						</div>
						<div class="upload">Upload
							<input class="upload-campanhas" type="file" name="logoAnunciante" id="files" onchange="preview(this);">
						</div>

						<div class="desc-anunciante">Descrição anunciante:</div>
						<div class="box-textarea"><textarea name="descAnunciante" id="editor5"><?php echo $dados["dadosanunciante"] ?></textarea></div>

						<div class="imagem-destacada">Imagem destacada</div>
						<img id="preview_image_2" alt="" src="uploads/<?php echo $dados["imgdestaque"] ?>" >
						<div class="upload">Upload
							<input class="upload-campanhas" type="file" name="files" id="files" onchange="preview_2(this);">
						</div>
					</div>

					<div class="localizacao">Localização</div>
					<div class="box-textarea-4"><textarea name="localizacao" id="editor4" placeholder="Informações sobre o anunciante."></textarea></div>
					<div style="width: 100%" class="localizacao">Estado:</div>
					<div class="box-textarea-4">
						<select class="valor-1" name="estado" style="width: 100%; margin: 0;"> 
							<option value="<?php echo $dados["estado"] ?>"><?php echo $dados["estado"] ?></option> 
							<option value="Acre">Acre</option> 
							<option value="Alagoas">Alagoas</option> 
							<option value="Amazonas">Amazonas</option> 
							<option value="Amapá">Amapá</option> 
							<option value="Bahia">Bahia</option> 
							<option value="Ceará">Ceará</option> 
							<option value="Distrito Federal">Distrito Federal</option> 
							<option value="Espírito Santo">Espírito Santo</option> 
							<option value="Goiás">Goiás</option> 
							<option value="Maranhão">Maranhão</option> 
							<option value="Mato Grosso">Mato Grosso</option> 
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option> 
							<option value="Minas Gerais">Minas Gerais</option> 
							<option value="Pará">Pará</option> 
							<option value="Paraíba">Paraíba</option> 
							<option value="Paraná">Paraná</option> 
							<option value="Pernambuco">Pernambuco</option> 
							<option value="Piauí">Piauí</option> 
							<option value="Rio de Janeiro">Rio de Janeiro</option> 
							<option value="Rio Grande do Norte">Rio Grande do Norte</option> 
							<option value="Rondônia">Rondônia</option> 
							<option value="Rio Grande do Sul">Rio Grande do Sul</option> 
							<option value="Roraima">Roraima</option> 
							<option value="Santa Catarina">Santa Catarina</option> 
							<option value="Sergipe">Sergipe</option> 
							<option value="São Paulo">São Paulo</option> 
							<option value="Tocantins">Tocantins</option> 
						</select>
					</div>
					<div style="width: 100%" class="localizacao">Cidade:</div>
					<div class="box-textarea-4"><input style="width: 100%; margin-top: 0;" class="valor-1" type="text" name="cidade" id="cidade" required="" placeholder="Ex: Brasilia" value="<?php echo $dados["cidade"] ?>" /></div>
					<div style="width: 100%" class="localizacao">Categoria:</div>
					<div class="box-textarea-4">
						<select class="valor-1" name="categoria" style="width: 100%; margin: 0;">
							<option value="<?php echo $dados["categoria"] ?>"><?php echo $dados["categoria"] ?></option>
							<?php lista_categorias_paginas(); ?>
						</select>
					</div>

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
							<input class="upload-campanhas" type="file" name="slide1Campanha" id="files" onchange="preview_slide_campanha_um(this);">
						</div>
						<!-- slide 2 -->
						<img id="preview_slide_campanha_2" alt="" src="uploads/<?php echo $dados2["slide2"] ?>" >
						<div class="upload">Slide 2
							<input class="upload-campanhas" type="file" name="slide2Campanha" id="files" onchange="preview_slide_campanha_dois(this);">
						</div>
						<!-- slide 3 -->
						<img id="preview_slide_campanha_3" alt="" src="uploads/<?php echo $dados2["slide3"] ?>" >
						<div class="upload">Slide 3
							<input class="upload-campanhas" type="file" name="slide3Campanha" id="files" onchange="preview_slide_campanha_tres(this);">
						</div>
					</div>

					<div class="divide"></div>

					<input type="submit" class="btn-add-campanha" value="Alterar campanha" />
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