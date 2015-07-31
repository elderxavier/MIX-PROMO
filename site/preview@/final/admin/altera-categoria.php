<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<div class="conteudo-centro">
			<div id="barra-lateral">
				<div class="barra-com-seta"></div>

				<ul class="menu-lateral-interno">
					<a href="categorias.php"><li class="primeira-li">Nova categoria</li></a>
					<a href="listagem-categorias.php"><li>Todas categorias</li></a>
					
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
				<h1>Categorias</h1><h2>Altera Categoria</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				<?php include 'funcoes/biblioteca.php';
					conexao();
					$result = mysql_query("SELECT * FROM categorias WHERE idcategoria=".$_GET["idcategoria"]."");
					$dados = mysql_fetch_assoc($result);
				?>

				<div class="box-conteudo-interno">
				<form action="funcoes/alt-categoria.php?idcategoria=<?php echo $dados["idcategoria"] ?>" method="POST"  target="iAjax">
					
					<input style="margin-top: 10px;" type="text" class="campo" name="categoria" id="categoria" placeholder="Nome Categoria" value="<?php echo $dados["categoria"] ?>" />

					<div class="divide"></div>
					<hr style="width: 100%; float: left; margin-top: 30px; opacity: 0.3; -webkit-opacity: 0.3; -moz-opacity: 0.3; -o-opacity: 0.3;"/>
					<br/>

					<input type="submit" class="btn-add-campanha" value="Alterar" />
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

</html>