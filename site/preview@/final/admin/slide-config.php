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
					<a href="slide-2.php"><li>Slide 2</li></a>
					<a href="slide-3.php"><li>Slide 3</li></a>
					<a href="slide-4.php"><li>Slide 4</li></a>
					<a href="slide-config.php"><li class="ultima-li ativo-menu-lateral-interno">Configurações</li></a>
					
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
				<h1>Slide</h1><h2>Configurações</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				<div class="box-conteudo-interno">
				<form action="funcoes/status-slide-config.php" method="POST" target="iAjax">
					<?php
						include 'funcoes/biblioteca.php';
						conexao();
						$result = mysql_query("select * from slide");
  					$dados = mysql_fetch_assoc($result);
					?>

					<div class="config-slide">
						<table>
							<tr>
								<td>Ativo</td><td>Ativar Slide ?</td>
							</tr>
						</table>
					</div>

					<div class="config-slide">
						<table>
							<tr>
								<td><?php echo $dados["status"]; ?></td>
								<td>
									<select name="status">
										<option value="Selecione">Selecione</option>
										<option value="Sim">Sim</option>
										<option value="Não">Não</option>
									</select>
								</td>
							</tr>
						</table>
					</div>

					

					<input type="submit" class="btn-add-campanha" value="Atualizar" />
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