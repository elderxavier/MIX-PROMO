<html>
<?php include 'header.php' ?>
<body>
	<div id="conteudo">
		<?php include 'topo.php' ?>

		<div class="conteudo-centro">
			<div id="barra-lateral">
				<div class="barra-com-seta"></div>

				<ul class="menu-lateral-interno">
					<a href="anunciantes.php"><li class="primeira-li ultima-li">Todos Anunciantes</li></a>
				</ul>

				<div class="box-barra-lateral">
					<p>Campanhas cadastradas:<span> 180</span></p>
				</div>

				<div class="box-barra-lateral">
					<p>Anunciantes cadastrados:<span> 120</span></p>
				</div>

				<div class="calendario">
					<div id="datepicker"></div>
				</div>
			</div>

			<div class="conteudo-interno">
				<h1>Anunciantes</h1><h2>Altera anunciante</h2>
				<form action="" method="POST" target="iAjax">
					<input type="text" name="pesquisar" class="pesquisar" placeholder="Pesquisar..." />
				</form>

				<!-- separador -->
				<div class="separador"></div>

				<?php
					include "funcoes/biblioteca.php";

					conexao();

					$idanunciante = $_GET["idanunciante"];
					$result = mysql_query("select * from anunciantes where idanunciante=".$idanunciante."");
					$dados = mysql_fetch_assoc($result);

				?>

				<div class="box-conteudo-interno">
					<div class="barra-info-pessoais">
						<p>Informações pessoais</p>
					</div>

					<form id="form-anunciantes" action="funcoes/alt-anunciante.php" method="POST" target="iAjax">
						<input style="width: 240px" type="text" name="nome" placeholder="Nome" value="<?php echo $dados["nome"] ?>"/>
						<input style="width: 240px" type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo $dados["sobre_nome"] ?>"/>
						<input type="text" name="dataNascimento" id="dataNascimento" placeholder="99/99/9999" value="<?php echo $dados["dataNascimento"] ?>"/>
						<select style="width: 240px" name="estado"> 
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
						<input style="width: 442px" type="text" name="cidade" placeholder="Cidade" value="<?php echo $dados["cidade"] ?>"/>
						<input style="width: 240px" type="text" name="telefone" placeholder="Telefone" class="mask-fone" value="<?php echo $dados["telefone"] ?>"/>
						<input style="width: 240px" type="text" name="celular" placeholder="Celular" class="mask-fone" value="<?php echo $dados["celular"] ?>"/>
						<input style="width: 232px" type="text" name="email" placeholder="E-mail" value="<?php echo $dados["email"] ?>"/>

						<div class="barra-info-pessoais" style="margin-top: 20px">
							<p>Informações empresa</p>
						</div>

						<input style="width: 240px" type="text" name="empresa" placeholder="Empresa" value="<?php echo $dados["empresa"] ?>"/>
						<input style="width: 240px" type="text" name="site" placeholder="Site" value="<?php echo $dados["site"] ?>"/>
						<select style="width: 232px" name="categoria">
							<option value="<?php echo $dados["categoria"] ?>"><?php echo $dados["categoria"] ?></option>
							<option value="Categoria">Categoria</option>
							<?php lista_categorias_paginas(); ?>
						</select>
						<input style="width: 240px" type="text" name="telEmpresa" placeholder="Telefone" class="mask-fone" value="<?php echo $dados["telEmpresa"] ?>"/>
						<input style="width: 240px" type="text" name="celEmpresa" placeholder="Celular" class="mask-fone" value="<?php echo $dados["celEmpresa"] ?>"/>
						<input style="width: 232px" type="text" name="facebook" placeholder="Facebook" value="<?php echo $dados["facebook"] ?>"/>
						<input style="width: 240px" type="text" name="skype" placeholder="Skype" value="<?php echo $dados["skype"] ?>"/>
						<input style="width: 482px" type="text" name="outraRede" placeholder="Outra rede social" value="<?php echo $dados["outraRede"] ?>"/>
						<input style="width: 240px" type="text" name="emailEmpresa" placeholder="E-mail" value="<?php echo $dados["emailEmpresa"] ?>"/>
						<input style="width: 482px" type="text" name="emailSecundarioEmpresa" placeholder="E-mail secundário" value="<?php echo $dados["emailSecundarioEmpresa"] ?>"/>
						<input style="width: 240px" type="text" name="cnpj" placeholder="CNPJ" value="<?php echo $dados["cnpj"] ?>"/>
						<input style="width: 240px" type="text" name="razaoSocial" placeholder="Razão Social" value="<?php echo $dados["razaoSocial"] ?>"/>
						<input style="width: 232px" type="text" name="inscricaoEstadual" placeholder="Inscrição Estadual" value="<?php echo $dados["inscricaoEstadual"] ?>"/>
						<select style="width: 240px" name="estadoEmpresa"> 
							<option value="<?php echo $dados["estadoEmpresa"] ?>"><?php echo $dados["estadoEmpresa"] ?></option> 
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
						<input style="width: 240px" type="text" name="cidadeEmpresa" placeholder="Cidade" value="<?php echo $dados["cidade"] ?>"/>
						<input style="width: 232px" type="text" name="tipoEndereco" placeholder="Tipo de endereço" value="<?php echo $dados["tipoEndereco"] ?>"/>
						<input style="width: 240px" type="text" name="enderecoEmpresa" placeholder="Endereço" value="<?php echo $dados["enderecoEmpresa"] ?>"/>
						<input style="width: 240px" type="text" name="cep" placeholder="Cep" value="<?php echo $dados["cep"] ?>"/>
						<input style="width: 232px" type="text" name="bairro" placeholder="Bairro" value="<?php echo $dados["bairro"] ?>"/>

						<textarea placeholder="Sobre a empresa" name="sobreNegocio"><?php echo $dados["sobreNegocio"] ?></textarea>

						<input type="submit" class="btn-add-campanha" value="Alterar dados" />
					</form>

					<iframe style="display: none" name="iAjax"></iframe>
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