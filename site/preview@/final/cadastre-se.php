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
						<h1>cadastre-se</h1>
					</div>

					<!-- box cadastre-se -->
					<div id="cadastre-se">
						<form action="admin/funcoes/add-usuario.php" method="POST" target="iAjax">
							<div class="box-cadastre-se">
								<p>Insira seu e-mail:</p>
								<input class="input-cadastre-se" name="email" type="text" required="" />
								<p>Nome:</p>
								<input class="input-cadastre-se" name="nome" type="text" required="" />
								<p>Estado:</p>
								<select class="input-cadastre-se" name="estado" required="">
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
								<p>Cidade:</p>
								<input class="input-cadastre-se" name="cidade" type="text" required="" />
								<p>Bairro:</p>
								<input class="input-cadastre-se" name="bairro" type="text" required="" />
								<p>Telefone(Fixo):</p>
								<input class="input-cadastre-se mask-fone" name="telefone_fixo" type="text" required="" />
								<p>Telefone(Celular):</p>
								<input class="input-cadastre-se mask-fone" name="telefone_celular" type="text" required="" />
								<p>Sexo:</p>
								<span>Masculino:</span><span>Feminino:</span><div style="width: 100%; float: left"></div>
								<input class="input-radio" type="radio" name="sexo" value="Masculino" />
								<div style="width: 200px; height: 5px; float: left;"></div>
								<input class="input-radio" type="radio" name="sexo" value="Feminino" />
								<p>Nascimento:</p>
								<input class="input-cadastre-se mask-data" name="data_nascimento" type="text" required="" />

								<p style="margin: 20px 0 10px 0">Selecione os dias da semana que deseja receber as ofertas do Mix Promo*:</p>

								<input type="checkbox" name="dias_para_receber_ofertas[]" value="Domingo" /><p class="dia">Dom</p>
								<input type="checkbox" name="dias_para_receber_ofertas[]" value="Segunda" /><p class="dia">Seg</p>
								<input type="checkbox" name="dias_para_receber_ofertas[]" value="Terça" /><p class="dia">Ter</p>
								<input type="checkbox" name="dias_para_receber_ofertas[]" value="Quarta" /><p class="dia">Qua</p>
								<input type="checkbox" name="dias_para_receber_ofertas[]" value="Quinta" /><p class="dia">Qui</p>
								<input type="checkbox" name="dias_para_receber_ofertas[]" value="Sexta" /><p class="dia">Sex</p>
								<input type="checkbox" name="dias_para_receber_ofertas[]" value="Sabado" /><p class="dia">Sáb</p>



								<div id="interesse">
									<p style="margin: 20px 0 20px 0">Qual é seu interesse?</p>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Comer & Beber" />
										<p class="p-estilo">Comer & Beber</p>
									</div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Entretenimento" />
										<p class="p-estilo">Entretenimento</p>
									</div>
									<div style="width: 100%; float: left"></div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Beleza & Bem-estar" />
										<p class="p-estilo">Beleza & Bem-estar</p>
									</div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Serviços" />
										<p class="p-estilo">Serviços</p>
									</div>
									<div style="width: 100%; float: left"></div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Pacotes Nacionais" />
										<p class="p-estilo">Pacotes Nacionais</p>
									</div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Pacotes Internacionais" />
										<p class="p-estilo">Pacotes Internacionais</p>
									</div>
									<div style="width: 100%; float: left"></div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Hotéis & Pousadas" />
										<p class="p-estilo">Hotéis & Pousadas</p>
									</div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Cruzeiros" />
										<p class="p-estilo">Cruzeiros</p>
									</div>
									<div style="width: 100%; float: left"></div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Tecnologia" />
										<p class="p-estilo">Tecnologia</p>
									</div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Casa" />
										<p class="p-estilo">Casa</p>
									</div>
									<div style="width: 100%; float: left"></div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Fotografia" />
										<p class="p-estilo">Fotografia</p>
									</div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Estilo" />
										<p class="p-estilo">Estilo</p>
									</div>
									<div style="width: 100%; float: left"></div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Esporte & Saúde" />
										<p class="p-estilo">Esporte & Saúde</p>
									</div>
									<div class="box-fora">
										<input type="checkbox" name="interesse[]" value="Adulto" />
										<p class="p-estilo">Adulto</p>
									</div>
								</div>

								<p style="margin: 20px 0 0 0">Bairros de sua preferência:</p>
								<input class="input-cadastre-se" type="text" name="bairro_preferencia" required="" />
							</div>
							

								<input type="submit" value="Cadastrar" class="btn-cadastre-se" />
								
							
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