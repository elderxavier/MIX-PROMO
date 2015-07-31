<html>
<!-- header -->
<?php include 'header.php' ?>
<body>
		<!-- topo -->
		<?php include 'topo.php' ?>

		<div class="alinhamento">
			<div class="alinhamento-centro">
				<!-- conteudo -->
				<div class="conteudo">

					<!-- categorias -->
					<?php include 'categorias.php' ?>

					<div class="barra">
						<h1>anuncie conosco</h1>
					</div>

					<!-- box anuncie -->
					<div id="anuncie">
						<form action="admin/funcoes/cadastra-anunciante.php" method="POST" target="iAjax">
							<div class="box-anuncie">
								<p>Nome*:</p>
								<input name="nome" class="inputAnuncie" type="text" required="" />
								<p>Categoria*:</p>
								<select name="categoria" class="inputAnuncie">
									<?php include_once 'admin/funcoes/biblioteca.php'; lista_categorias_paginas(); ?>
								</select>
								<p>Tipo de endereço*:</p>
								<select name="tipo_de_endereco" class="inputAnuncie" type="text">
									<option value="Avenida">Avenida</option>
									<option value="Alameda">Alameda</option>
									<option value="Praça">Praça</option>
									<option value="Travessa">Travessa</option>
									<option value="Rua">Rua</option>
									<option value="Condominio">Condominio</option>
									<option value="Vila">Vila</option>
									<option value="Setor">Setor</option>
									<option value="Quadra">Quadra</option>
									<option value="Estrada">Estrada</option>
									<option value="Rodovia">Rodovia</option>
									<option value="Largo">Largo</option>
									<option value="Jardin">Jardin</option>
								</select>
								<p>Site:</p>
								<input name="site" class="inputAnuncie" type="text" />
								<p>Estado*:</p>
								<select name="estado" class="inputAnuncie">
									<option value="estado">Selecione o Estado</option> 
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
							<div class="box-anuncie">
								<p>Sobre nome*:</p>
								<input name="sobre_nome" class="inputAnuncie" type="text" required="" />
								<p>facebook:</p>
								<input name="facebook" class="inputAnuncie" type="text" />
								<p>Endereço*:</p>
								<input name="endereco" class="inputAnuncie" type="text" required="" />
								<p>Bairro*:</p>
								<input name="bairro" class="inputAnuncie" type="text" required="" />
								<p>Cidade*:</p>
								<input name="cidade" class="inputAnuncie" type="text" required="" />
							</div>
							<div class="box-anuncie">
								<p>Empresa*:</p>
								<input name="empresa" class="inputAnuncie" type="text" required="" />
								<p>Outra rede social:</p>
								<input name="outraRede" class="inputAnuncie" type="text" />
								<p>Cep*:</p>
								<input name="cep" class="inputAnuncie" type="text" required="" />
								<p>E-mail*:</p>
								<input name="email" class="inputAnuncie" type="text" required="" />
								<p>Telefone*:</p>
								<input name="telefone" class="inputAnuncie mask-fone" type="text" required="" />
								<p>Celular*:</p>
								<input name="celular" class="inputAnuncie mask-fone" type="text" required="" />
							</div>
							<div class="box-anuncie-2">
								<p>Conte um pouco sobre o seu negócio:</p>
								<textarea name="sobre_negocio" class="textAnuncie"></textarea>

								<input type="submit" value="Cadastrar" class="btnCadastra" />
								
							</div>
						</form>
							<iframe style="display: none;" name="iAjax"></iframe>

						<div class="barra">
							<h1>por que me cadastrar?</h1>
						</div>
						<div class="porque-me-cadastrar">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh sit amet ligula pulvinar auctor ut ac nisi. Aliquam ut eros nibh. Duis in turpis felis. Proin placerat suscipit nisi, quis vulputate mauris convallis et. Sed porttitor turpis in nisi faucibus gravida. Sed est tortor, pellentesque vitae luctus nec, mollis ut leo. Aliquam tempor urna sed nisi condimentum accumsan. Vivamus ullamcorper ultrices dolor vitae bibendum. Proin placerat suscipit nisi, quis vulputate mauris convallis et. Sed porttitor turpis in nisi faucibus gravida. Sed est tortor, pellentesque vitae luctus nec, mollis ut leo. Aliquam tempor urna sed nisi condimentum accumsan. Vivamus ullamcorper ultrices dolor vitae bibendum.
						</div>
					</div>

		      <!-- menu footer -->
					<?php include 'menu-footer.php' ?>

				</div><!-- final conteudo -->
			</div>
		</div><!-- final alinhamento -->


		<!-- footer -->
		<?php include 'footer.php' ?>
		
</body>
</html>