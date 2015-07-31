<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<div class="conteudo-centro">
			<div id="barra-lateral">
				<div class="barra-com-seta"></div>

				<ul class="menu-lateral-interno">
					<a href="slide.php"><li class="primeira-li">Slide 1</li></a>
					<a href="slide-2.php"><li class="ativo-menu-lateral-interno">Slide 2</li></a>
					<a href="slide-3.php"><li>Slide 3</li></a>
					<a href="slide-4.php"><li>Slide 4</li></a>
					<a href="slide-config.php"><li class="ultima-li">Configurações</li></a>
					
				</ul>

				<div class="box-barra-lateral">
					<p>Campanhas cadastradas:<span> 180</span></p>
				</div>

				<div class="box-barra-lateral">
					<p>Clientes cadastrados:<span> 120</span></p>
				</div>

				<div class="calendario">
					
				</div>
			</div>

			<div class="conteudo-interno">
				<h1>Slide</h1><h2>Slide 2</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				<div class="box-conteudo-interno">
				<form action="funcoes/add-slide-2.php" enctype="multipart/form-data" method="POST" target="iAjax">
					<?php
						include 'funcoes/biblioteca.php';
						conexao();
						$result = mysql_query("select * from slide");
  					$dados = mysql_fetch_assoc($result);

  					$result2 = mysql_query("select * from linkslide");
  					$dados2 = mysql_fetch_assoc($result2);
					?>
					<img id="preview_slide_principal_2" alt="" src="<?php if($dados["slide2"] != ""){echo "../admin/imagens/slide/".$dados["slide2"];} ?>" >
					<div class="upload">Upload
						<input class="upload-campanhas" type="file" name="slide2" id="files" onchange="preview_slide_principal_dois(this);">
					</div>
					<input style="margin-top: 10px;" type="text" class="campo" name="link2" placeholder="ex: http://www.link.com.br" value="<?php if($dados2['link2'] != ""){echo $dados2["link2"];} ?>"/>

					<div class="divide"></div>
					<hr style="width: 100%; float: left; margin-top: 30px; opacity: 0.3; -webkit-opacity: 0.3; -moz-opacity: 0.3; -o-opacity: 0.3;"/>
					<br/>

					<input type="submit" class="btn-add-campanha" value="Publicar" />
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
			CKEDITOR.replace( 'editor_empresa', {
				uiColor: '#cecece',
				toolbar: [
					[ 'Source', 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
					[ 'FontSize', 'TextColor', 'BGColor' ]
				]
			});

		</script>
</html>