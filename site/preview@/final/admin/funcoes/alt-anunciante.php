<?php
	include 'biblioteca.php';

	//conexao com banco de dados
	conexao();


  $nome                     = $_POST["nome"];
  $sobre_nome               = $_POST["sobrenome"];
  $dataNascimento           = $_POST["dataNascimento"];
  $estado                   = $_POST["estado"];
  $cidade                   = $_POST["cidade"];
  $telefone                 = $_POST["telefone"];
  $celular                  = $_POST["celular"];
  $email                    = $_POST["email"];
  $empresa                  = $_POST["empresa"];
  $site                     = $_POST["site"];
  $categoria                = $_POST["categoria"];
  $telEmpresa               = $_POST["telEmpresa"];
  $celEmpresa               = $_POST["celEmpresa"];
  $facebook                 = $_POST["facebook"];
  $skype                    = $_POST["skype"];
  $outraRede                = $_POST["outraRede"];
  $emailEmpresa             = $_POST["emailEmpresa"];
  $emailSecundarioEmpresa   = $_POST["emailSecundarioEmpresa"];
  $cnpj                     = $_POST["cnpj"];
  $razaoSocial              = $_POST["razaoSocial"];
  $inscricaoEstadual        = $_POST["inscricaoEstadual"];
  $estadoEmpresa            = $_POST["estadoEmpresa"];
  $cidadeEmpresa            = $_POST["cidadeEmpresa"];
  $tipoEndereco             = $_POST["tipoEndereco"];
  $enderecoEmpresa          = $_POST["enderecoEmpresa"];
  $cep                      = $_POST["cep"];
  $bairro                   = $_POST["bairro"];
  $sobreNegocio             = $_POST["sobreNegocio"];




  altera_anunciante($nome,$sobre_nome,$dataNascimento,$estado,$cidade,$telefone,$celular,$email,$empresa,$site,$categoria,$telEmpresa,$celEmpresa,$facebook,$skype,$outraRede,$emailEmpresa,$emailSecundarioEmpresa,$cnpj,$razaoSocial,$inscricaoEstadual,$estadoEmpresa,$cidadeEmpresa,$tipoEndereco,$enderecoEmpresa,$cep,$bairro,$sobreNegocio);











?>