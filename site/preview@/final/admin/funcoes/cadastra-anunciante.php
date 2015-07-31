<?php
	include 'biblioteca.php';

	$nome             = $_POST["nome"];
	$sobre_nome       = $_POST["sobre_nome"];
	$empresa          = $_POST["empresa"];
	$categoria        = $_POST["categoria"];
	$facebook  		    = $_POST["facebook"];
	$outraRede        = $_POST["outraRede"];
	$tipo_de_endereco = $_POST["tipo_de_endereco"];
	$endereco         = $_POST["endereco"];
	$cep              = $_POST["cep"];
	$site             = $_POST["site"];
	$bairro           = $_POST["bairro"];
	$email            = $_POST["email"];
	$estado           = $_POST["estado"];
	$cidade           = $_POST["cidade"];
	$telefone         = $_POST["telefone"];
	$celular          = $_POST["celular"];
	$sobre_negocio    = $_POST["sobre_negocio"];

	
	if($nome && $sobre_nome && $empresa && $categoria && $tipo_de_endereco && $endereco && $cep && $bairro && $email && $estado && $cidade && $telefone != ""){
		cadastra_anunciante($nome,$sobre_nome,$empresa,$categoria,$facebook,$outraRede,$tipo_de_endereco,$endereco,$cep,$site,$bairro,$email,$estado,$cidade,$telefone,$celular,$sobre_negocio);
	}else{
		echo "<script>alert('preencha os campos obrigatórios.');</script>";
	}
?>