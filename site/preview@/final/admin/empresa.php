<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<div class="conteudo-centro">
			<div id="barra-lateral">
				<div class="barra-com-seta"></div>

				<ul class="menu-lateral-interno">
					<li class="primeira-li ativo-menu-lateral-interno">Quem Somos</li>
					<li class="ultima-li">Anuncie Aqui</li>
					
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
				<h1>Empresa</h1><h2>Quem Somos</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				<div class="box-conteudo-interno">
					<?php
						include 'funcoes/biblioteca.php';
						conexao();
						$result = mysql_query("select * from quemsomos");
  					$dados = mysql_fetch_assoc($result);
					?>
					<form class="empresa" action="funcoes/add-pagina-quem-somos.php" method="POST" target="iAjax" >
					<div class="box-textarea-empresa"><textarea name="conteudoQuemSomos" id="editor_empresa" placeholder="Informações sobre o anunciante."><?php echo $dados["conteudo"] ?></textarea></div>

					<div class="divide"></div>

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