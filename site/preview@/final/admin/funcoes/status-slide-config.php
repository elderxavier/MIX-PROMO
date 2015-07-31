<?php

	include 'biblioteca.php';

	$status = $_POST["status"];

	conexao();

  	mysql_query("UPDATE slide SET status='".$status."'");
  	echo "<script>parent.alert('Alteração feita com sucesso!'); parent.location = '../slide-config.php';</script>";

  
?>