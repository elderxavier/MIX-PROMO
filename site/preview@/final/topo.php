<?php include "admin/funcoes/biblioteca.php"; ?>

<!-- navegação topo -->
<div id="topo">
	<div class="topo-conteudo">
		<!-- logo topo -->
		<a href="index.php"><div class="logo"></div></a>

		<!-- navegação topo -->
		<div class="navegacao-topo">
			<ul>
				<a href="anuncie.php"><li class="anuncieaqui">anuncie aqui</li></a>
				<a href="como-usar.php"><li>como usar</li></a>
				<a href="cadastre-se.php"><li>cadastre-se</li></a>
				<a href="#this"><li class="login"><img src="imagens/icon-login.png">faça login
					<ul>
						<li><input class="login-campo" type="text" name="login" placeholder="login" /></li>
						<li><input class="login-campo" type="text" name="senha" placeholder="senha" /></li>
						<li><input class="login-btn" type="submit" value="entrar" /></li>
					</ul>
				</li></a>
			</ul>
		</div><!-- final navegação topo -->

		<!-- campos topo -->
		<div class="campos-topo">
			<!--<select name="localidade" class="campo-localidade">
				<option value="Brasília">Brasília</option>
				<option value="Águas Claras">Águas Claras</option>
			</select>-->
			<form action="busca.php" method="post">
				<input type="text" name="campoPesquisa" class="campo_pesquisa" placeholder="Pesquisar" />
				<input type="submit" class="btnOfertas" value="" />
			</form>
		</div><!-- final campos topo -->

		<form class="filtroOfertas" action="" method="POST" target="iAjax">
			<select name="filtroEstado" class="filtro-estado">
			<option>Estado</option>
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
			<select name="filtroCategoria" class="filtro-categoria">
				<option value="Categoria">Categoria</option>
				<?php lista_categorias_paginas(); ?>
			</select>
			<input type="submit" class="btnFiltroTopo" value="Filtrar" />
		</form>

	</div>
</div><!-- fimal navegação topo -->