<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<div class="conteudo-centro">
			<div id="barra-lateral">
				<div class="barra-com-seta"></div>

				<ul class="menu-lateral-interno">
					<li class="primeira-li ativo-menu-lateral-interno ultima-li">Usuários</li>
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
				<h1>Usuários</h1><h2>Listagem usuários</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				

				<div class="box-conteudo-interno">
					<div id="usuarios">
						<div class="box-filtro">
							<input type="text" name="nome" placeholder="Nome">
							<input type="text" name="email" placeholder="E-mail">
							<input type="text" name="cidade" placeholder="Cidade">
							<input type="submit" value="Filtrar" />
						</div>
						<div class="box-usuarios">
							<table>
								<tr>
									<td>Nome</td><td>E-mail</td><td>Cidade</td>
								</tr>
							</table>
						</div>

						<?php include 'funcoes/biblioteca.php'; lista_usuarios();  ?>

						

					</div>
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