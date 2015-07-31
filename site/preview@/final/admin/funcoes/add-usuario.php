<?php

	include 'biblioteca.php';



	$email                       = $_POST["email"];
	$nome                        = $_POST["nome"];
	$estado 					           = $_POST["estado"];
	$cidade						           = $_POST["cidade"];
	$bairro 					           = $_POST["bairro"];
	$telefone_fixo 				       = $_POST["telefone_fixo"];
	$telefone_celular 			     = $_POST["telefone_celular"];
	$sexo 						           = $_POST["sexo"];
	$data_nascimento 			       = $_POST["data_nascimento"];
	$dias_para_receber_ofertas   = $_POST["dias_para_receber_ofertas"];
	$interesse 					         = $_POST["interesse"];
	$bairro_preferencia			     = $_POST["bairro_preferencia"];



//puxa dados do checkboox
	foreach ($dias_para_receber_ofertas as $valor) {
		$dias_array .= $valor.', '; 
	}

	foreach ($interesse as $valor) {
		$interesse_array .= $valor.', '; 
	}



//função para cadastrar usuarios
cadastra_usuarios($email, $nome, $estado, $cidade, $bairro, $telefone_fixo, $telefone_celular, $sexo, $data_nascimento, $dias_array, $interesse_array, $bairro_preferencia);





	/*echo "<script>parent.alert('".$email." - ".$nome." - ".$senha." - ".$senha2." - ".$estado." - ".$cidade." - ".$bairro." - ".$telefone_fixo." - ".$telefone_celular." - ".$sexo." - ".$data_nascimento." - ".$dias_para_receber_ofertas." - ".$interesse." - ".$bairro_preferencia." -');</script>";*/
?>

<script type="text/javascript">

	parent.location = '../../cadastre-se.php';

</script>